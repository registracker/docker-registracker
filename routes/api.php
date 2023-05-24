<?php

use App\Exports\ReporteContadorExport;
use App\Exports\DetalleMedioRecorridoExport;
use App\Exports\ReporteContadorAgrupadoExport;
use App\Http\Controllers\Api\BitacoraTablaController;
use App\Http\Controllers\Api\ClasesServiciosRutasController;
use App\Http\Controllers\Api\ZonaController;
use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\GeneroController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UniversidadController;
use App\Http\Controllers\Api\IncidenteController;
use App\Http\Controllers\Api\MarcadorController;
use App\Http\Controllers\Api\MedioDesplazamientoController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\RoleDisableAuthorizationController;
use App\Http\Controllers\Api\VehiculoController;
use App\Http\Controllers\Api\DesplazamientoController;
use App\Http\Controllers\Api\DetalleMedioRecorridoController;
use App\Http\Controllers\Api\EstadoSolicitudController;
use App\Http\Controllers\Api\LevantamientoContadorController;
use App\Http\Controllers\Api\LevantamientoController;
use App\Http\Controllers\Api\ReporteContadorController;
use App\Http\Controllers\Api\SolicitudCuentaController;
use App\Http\Controllers\Api\ReporteIncidenteController;
use App\Http\Controllers\Api\RutasTransporteController;
use App\Http\Controllers\Api\TiposServiciosRutasController;
use App\Http\Controllers\Api\TiposVehiculosRutasController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\ReporteMarcadoresController;
use App\Models\CoordenadaDesplazamiento;
use App\Models\Desplazamiento;
use App\Models\DetalleMedioRecorrido;
use App\Models\Levantamiento;
use App\Models\LevantamientoContador;
use App\Models\ReporteMarcadores;
use App\Models\SolicitudCuenta;
use App\Models\User;
use App\Models\Vehiculo;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Orion\Facades\Orion;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel as ExcelFormat;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

function calcularDuracionMediosPorUuid($id, $costos)
{
    $now = Carbon::now()->toDateTimeString();

    $desplazamientosAgrupado = CoordenadaDesplazamiento::select(
        'agrupacion_medio_desplazamiento',
        'id_medio_desplazamiento',
        DB::raw('MIN(fecha_registro) AS fecha_inicio'),
        DB::raw('MAX(fecha_registro) AS fecha_fin')
    )
        ->where('desplazamiento_id', $id)
        ->groupBy('agrupacion_medio_desplazamiento', 'id_medio_desplazamiento')
        ->orderBy('fecha_inicio', 'ASC')
        ->get();

    // dd($desplazamientosAgrupado);

    foreach ($desplazamientosAgrupado  as $clave => $desplazamiento) {
        $fecha = Carbon::parse($desplazamiento['fecha_fin'])->diffAsCarbonInterval(Carbon::parse($desplazamiento['fecha_inicio']));
        $duracion =  Arr::join([Str::padLeft($fecha->h, 2, '0'), Str::padLeft($fecha->i, 2, '0'), Str::padLeft($fecha->s, 2, '0')], ':');
        $desplazamiento['duracion'] = $duracion;
        $desplazamiento['fecha_creado'] = $now;
        $desplazamiento['fecha_actualizado'] = $now;
        $desplazamiento['desplazamiento_id'] = $id;
        //COSTO QUE TE ENVIE EN LA REQUEST detalle_medios_recorrido
        $desplazamiento['costo'] = isset($costos[$clave]['costo']) ? $costos[$clave]['costo'] : null;
        $desplazamiento['ruta'] = null;
    }

    $coleccion = collect($desplazamientosAgrupado)->map(function ($item) {
        return collect($item)
            ->only(['desplazamiento_id', 'id_medio_desplazamiento', 'duracion', 'fecha_creado', 'fecha_actualizado'])
            ->toArray();
    })->toArray();

    DetalleMedioRecorrido::insert($coleccion);

    return $coleccion;
}

Route::middleware('auth:sanctum')->post('/desplazamiento/registrar', function (Request $request) {
    $now = Carbon::now()->toDateTimeString();
    $uuid = $request->uuid;
    $costos = $request->costos;

    Desplazamiento::updateOrCreate([
        'id' => $uuid
    ], [
        'id' => $uuid
    ]);

    $ruta = collect($request->desplazamiento)->map(function ($item, $key) use ($now, $uuid) {
        $item['desplazamiento_id'] = $uuid;
        $item['fecha_creado'] = $now;
        $item['fecha_actualizado'] = $now;
        $item['fecha_registro'] = Carbon::createFromTimestampMs($item['fecha_registro']);
        $longitud = $item['longitud'];
        $latitud = $item['latitud'];
        unset($item['longitud'], $item['latitud']);
        $item['posicion'] = DB::raw("ST_SetSRID(ST_Point($longitud, $latitud), 4326)");
        return $item;
    })->toArray();

    CoordenadaDesplazamiento::insert($ruta);

    $totalRegistros = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid)->count();

    $inicioDesplazamiento = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid)
        ->orderBy('fecha_registro', 'asc')
        ->first();

    $finDesplazamiento = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid)
        ->orderBy('fecha_registro', 'desc')
        ->first();

    $velocidadMax = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid)
        ->max('velocidad');

    $velocidadMed = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid)
        ->avg('velocidad');

    $elevacionMin = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid)
        ->min('altitud');

    $elevacionMax = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid)
        ->max('altitud');

    Desplazamiento::updateOrCreate([
        'id' => $uuid
    ], [
        'id_usuario' => $request->user()->id,
        'velocidad_max' => $velocidadMax,
        'velocidad_media' => $velocidadMed,
        'duracion' => Carbon::parse($finDesplazamiento->fecha_registro)->diffInMinutes(Carbon::parse($inicioDesplazamiento->fecha_registro)),
        'inicio_desplazamiento' => $inicioDesplazamiento->fecha_registro,
        'fin_desplazamiento' => $finDesplazamiento->fecha_registro,
        'elevacion_min' => $elevacionMin,
        'elevacion_max' => $elevacionMax,
    ]);

    calcularDuracionMediosPorUuid($uuid, $costos);

    return response()->json(['registros_insertados' =>  $totalRegistros], Response::HTTP_CREATED);
});

Route::middleware('auth:sanctum')->get('/desplazamiento/{desplazamiento}', function (Request $request, Desplazamiento $desplazamiento) {
    $queryLineString = "SELECT jsonb_build_object(
            'type', 'FeatureCollection',
            'features', jsonb_agg(feature)
        ) AS geojson
        FROM (
            SELECT jsonb_build_object(
                'type', 'Feature',
                'geometry', ST_AsGeoJSON(ST_MakeLine(cd.posicion::geometry))::jsonb,
                'properties', jsonb_build_object(
                    'agrupacion_medio_desplazamiento', cd.agrupacion_medio_desplazamiento,
                    'medios_desplazamiento', jsonb_build_object(
                        'id', md.id,
                        'nombre', md.nombre
                    )
                )
            ) AS feature
            FROM coordenadas_desplazamiento cd
            JOIN medios_desplazamiento md ON cd.id_medio_desplazamiento = md.id
            WHERE cd.posicion IS NOT NULL
            AND cd.desplazamiento_id = :desplazamiento_id 
            GROUP BY cd.agrupacion_medio_desplazamiento, md.id, md.nombre
        ) subconsulta;";

    $query = "SELECT json_build_object(
        'type', 'FeatureCollection',
        'features', json_agg(
            json_build_object(
                'type', 'Feature',
                'geometry', ST_AsGeoJSON(posicion)::json,
                'properties', json_build_object(
                    'fecha_registro', fecha_registro,
                    'inicio_recorrido', CASE WHEN tipo = 'Inicio' THEN true ELSE false END,
                    'fin_recorrido', CASE WHEN tipo = 'Fin' THEN true ELSE false END,
                    'fecha_registro', fecha_registro
                )
            )
        )
    ) AS geojson
    FROM (
        SELECT
            CASE
                WHEN fecha_registro = primer_fecha THEN 'Inicio'
                WHEN fecha_registro = ultima_fecha THEN 'Fin'
            END AS tipo,
            posicion,
            fecha_registro
        FROM (
            SELECT
                posicion,
                fecha_registro,
                (SELECT MIN(fecha_registro) FROM coordenadas_desplazamiento WHERE desplazamiento_id = :desplazamiento_id) AS primer_fecha,
                (SELECT MAX(fecha_registro) FROM coordenadas_desplazamiento WHERE desplazamiento_id = :desplazamiento_id) AS ultima_fecha
            FROM coordenadas_desplazamiento
            WHERE desplazamiento_id = :desplazamiento_id
        ) AS subquery
    ) AS subquery2
    WHERE tipo IS NOT NULL;";

    $resultadoGeoJSON = DB::select($queryLineString, ['desplazamiento_id' => $desplazamiento->id]);
    $resultado = DB::select($query, ['desplazamiento_id' => $desplazamiento->id]);

    return response()->json([
        'coleccion' => json_decode($resultadoGeoJSON[0]->geojson),
        'limite' => json_decode($resultado[0]->geojson)
    ]);
});

Route::middleware('auth:sanctum')->get('/recorrido/geojson/filtro', function (Request $request) {
    $request->validate([
        'fecha_inicio' => ['date_format:Y-m-d'],
        'fecha_fin' => ['date_format:Y-m-d'],
    ]);

    $fechaInicio = $request->query('fecha_inicio', (new Carbon())->format('Y-m-d'));
    $fechaFin = $request->query('fecha_fin', (new Carbon())->addDay()->format('Y-m-d'));
    $fechas = [new Carbon($fechaInicio), new Carbon($fechaFin)];
    usort($fechas, function ($a, $b) {
        return $a->timestamp - $b->timestamp;
    });

    $queryLineString = "SELECT jsonb_build_object(
        'type', 'FeatureCollection',
        'features', jsonb_agg(
            jsonb_build_object(
                'type', 'Feature',
                'geometry', ST_AsGeoJSON(linestring)::jsonb,
                'properties', jsonb_build_object(
                    'desplazamiento', to_jsonb(d)
                )
            )
        )
    ) AS geojson
    FROM (
        SELECT c.desplazamiento_id, ST_MakeLine(ST_Transform(c.posicion::geometry, 4326) ORDER BY c.fecha_registro) AS linestring
        FROM desplazamientos d
        JOIN coordenadas_desplazamiento c ON d.id = c.desplazamiento_id
        WHERE d.fecha_creado BETWEEN ? AND ?
        GROUP BY c.desplazamiento_id
    ) AS subquery
    JOIN desplazamientos d ON subquery.desplazamiento_id = d.id;";

    $resultadoGeoJSON = DB::select($queryLineString, $fechas);

    return response()->json([
        'coleccion' => json_decode($resultadoGeoJSON[0]->geojson)
    ]);
});

Route::middleware('auth:sanctum')->get('/reporte-marcadores/{codigo}/geojson', function (Request $request, $codigo) {
    $levantamiento = Levantamiento::where('codigo', $codigo)->firstOrFail();

    $queryLineString = "SELECT json_build_object(
        'type', 'FeatureCollection',
        'features', json_agg(feature)
    ) AS geojson
    FROM (
        SELECT json_build_object(
            'type', 'Feature',
            'geometry', ST_AsGeoJSON(r.posicion)::json,
            'properties', json_build_object(
                'altitud', r.altitud,
                'comentario', r.comentario,
                'id_marcador', r.id_marcador,
                'marcador', json_build_object(
                    'id', m.id,
                    'nombre', m.nombre,
                    'icono', m.icono
                )
            )
        ) AS feature
        FROM reporte_marcadores r
        INNER JOIN marcadores m ON r.id_marcador = m.id
        WHERE r.id_levantamiento = ?
    ) AS features;";

    $resultadoGeoJSON = DB::select($queryLineString, [$levantamiento->id]);

    return response()->json([
        'data' => json_decode($resultadoGeoJSON[0]->geojson)
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json(['usuario' => $request->user(), 'permisos' => $request->user()->getPermisosWeb()]);
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['Las credenciales proporcionadas son incorrectas.'],
        ]);
    }

    $estado = $user->solicitud->estado;

    if (!$estado->permitir_acceso) {
        throw ValidationException::withMessages([
            'block' => ['Estado de cuenta: ' . $estado->nombre . '.'],
        ]);
    }

    $token =  $user->createToken($user->getNombreRoles(), [])->plainTextToken;

    return response()->json([
        'token' =>  $token
    ]);
});

Route::middleware('auth:sanctum')->post('/token/permisos', function (Request $request) {
    return response()->json([
        'user' => $request->user()->currentAccessToken()
    ]);
});

Route::middleware('auth:sanctum')->delete('/token', function (Request $request) {
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'token' =>  'Token eliminado.'
    ]);
});

Route::middleware('auth:sanctum')->delete('/tokens', function (Request $request) {
    $request->user()->tokens()->delete();
    return response()->json([
        'token' =>  'Tokens eliminados.'
    ]);
});

Route::post('/usuario', function (Request $request) {
    $ID_ESTADO_REVISION = 2;
    $ID_ESTADO_ACTIVA = 1;

    $request->validate([
        'email' => ['required', 'email', 'unique:users,email', 'max:255'],
        'password' => ['required'],
        'nombre_usuario' => ['nullable'],
        'rol' => ['required', 'exists:roles,id'],
    ], [
        'email' => 'El correo es requerido y debe ser único.',
        'password' => 'Debe agregar password.',
        'rol' => 'El rol es inválido.'
    ]);

    DB::beginTransaction();
    try {
        $usuario = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->nombre_usuario ?? '',
        ]);

        $rol = Role::findOrFail($request->rol);
        $usuario->assignRole($rol->name);
        DB::commit();

        $estadoCuenta = $ID_ESTADO_REVISION;

        if ($request->rol ==  $ID_ESTADO_REVISION && Str::of($request->email)->endsWith('@ues.edu.sv')) {
            $estadoCuenta = $ID_ESTADO_ACTIVA;
        }

        SolicitudCuenta::create([
            'id_usuario' => $usuario->id,
            'id_estado_solicitud' => $estadoCuenta,
        ]);

        return response()->json([
            'usuario' =>  $usuario,
            'estado_cuenta' =>  $usuario->solicitud->estado->nombre,
        ]);
    } catch (\Throwable $th) {
        //throw $th;
        DB::rollBack();
        return response($th);
    }
});

Route::get('/estado-cuenta', function (Request $request) {
    $usuario = User::where('email', $request->email)->firstOrFail();
    // $usuarios = User::with(['solicitud.estado'])->get();
    return response()->json([
        'estado' =>  $usuario->solicitud->estado,
        // 'usuarios' =>  $usuarios,
    ]);
});

Route::post('/reporte-marcador/{codigo}/csv', function (Request $request, $codigo) {
    $levantamientoContador = ReporteMarcadores::where('codigo', $codigo)->firstOrFail();
    return Excel::download(new ReporteContadorExport($levantamientoContador), 'reporte-marcador.csv', ExcelFormat::CSV);
});

Route::post('/reporte-contador/{codigo}/csv', function (Request $request, $codigo) {
    $levantamientoContador = LevantamientoContador::where('codigo', $codigo)->firstOrFail();
    return Excel::download(new ReporteContadorExport($levantamientoContador), 'reporte-contador.csv', ExcelFormat::CSV);
});

Route::get('/download-desplazamientos/csv', function (Request $request) {
    //$levantamientoContador = LevantamientoContador::where('codigo', $codigo)->firstOrFail();
    return Excel::download(new DetalleMedioRecorridoExport, 'desplazamientos.csv', ExcelFormat::CSV);
});

Route::get('/reporte-contador/{codigo}/agrupado', function (Request $request, $codigo) {
    if ($request->query('total_vehiculos', null) == 'yes') {
        $levantamientoContador = LevantamientoContador::where('codigo', $codigo)->firstOrFail();
        $totalElementos = Vehiculo::withCount(['reporte' => function (Builder $query) use ($levantamientoContador) {
            $query
                ->where('id_levantamiento_contador', $levantamientoContador->id)
                ->whereDate('registrado', '<=', $levantamientoContador->periodo_inicio)
                ->whereDate('registrado', '<=', $levantamientoContador->periodo_fin);
        }])
            ->orderBy('id')
            ->get();

        return response()->json([
            'data' =>  $totalElementos,
            'total' => $totalElementos->pluck('reporte_count')->sum(),
        ]);
    }

    $minutosValidos = [15, 30, 60];
    $minutosEnUnDia = 1440;

    $agrupacionMinutos = $request->query('agrupacion_minutos', 15);
    $agrupacionMinutos = is_numeric($agrupacionMinutos) ? intval($agrupacionMinutos) : 15;
    $agrupacionMinutos = in_array($agrupacionMinutos, $minutosValidos) ? $agrupacionMinutos : 15;

    $bloquesEnUnDia = $minutosEnUnDia / $agrupacionMinutos;

    $levantamientoContador = LevantamientoContador::where('codigo', $codigo)->firstOrFail();
    $periodoInicio = $levantamientoContador->periodo_inicio;
    $fechasAgrupadas = collect([]);
    $datosTabla = array();

    $vehiculos = Vehiculo::orderBy('id')->get();
    $cabecera = $vehiculos->pluck('nombre')
        ->prepend('Horario')
        ->push('Total')
        ->toArray();

    array_push($datosTabla, $cabecera);

    $fechasAgrupadas->push((new Carbon($periodoInicio)));
    for ($i = 1; $i < $bloquesEnUnDia; $i++) {
        $minutos = $agrupacionMinutos * $i;
        $fechasAgrupadas->push((new Carbon($periodoInicio))->addMinutes($minutos)->subSecond());
        $fechasAgrupadas->push((new Carbon($periodoInicio))->addMinutes($minutos));
    }
    $fechasAgrupadas->push((new Carbon($periodoInicio))->addDay());

    $fechasAgrupadas = $fechasAgrupadas->chunk(2);

    foreach ($fechasAgrupadas as $rangoFecha) {
        $conteoVehicular = Vehiculo::withCount(['reporte' => function (Builder $query)
        use ($rangoFecha, $levantamientoContador) {
            // $query->whereBetween('registrado', $rangoFecha);
            // dd($levantamientoContador);
            $query
                ->where('id_levantamiento_contador', $levantamientoContador->id)
                ->whereTime('registrado', '>=', $rangoFecha->first())
                ->whereTime('registrado', '<=', $rangoFecha->last())
                ->whereDate('registrado', '<=', $levantamientoContador->periodo_inicio)
                ->whereDate('registrado', '<=', $levantamientoContador->periodo_fin);
        }])
            ->orderBy('id')
            ->get()
            ->pluck('reporte_count');


        $rangoFecha = implode(" - ", collect($rangoFecha)
            ->map(function ($fecha) {
                return $fecha->format('g:i:s A');
            })
            ->toArray());

        /**
         * Agrega suma al final del array
         * Agrega rango horario al inicio del array
         */
        $conteoVehicular
            ->push($conteoVehicular->sum())
            ->prepend($rangoFecha);

        array_push($datosTabla, $conteoVehicular->toArray());
    }

    $totalElementos = Vehiculo::withCount(['reporte' => function (Builder $query) use ($levantamientoContador) {
        $query
            ->where('id_levantamiento_contador', $levantamientoContador->id)
            ->whereDate('registrado', '<=', $levantamientoContador->periodo_inicio)
            ->whereDate('registrado', '<=', $levantamientoContador->periodo_fin);
    }])
        ->orderBy('id')
        ->get()
        ->pluck('reporte_count')
        ->toArray();

    array_push($totalElementos, collect($totalElementos)->sum());
    array_unshift($totalElementos, 'Total registros');
    array_push($datosTabla, $totalElementos);

    if ($request->query('csv', null) == 'yes') {
        return Excel::download(new ReporteContadorAgrupadoExport($datosTabla), 'reporte-contador.csv', ExcelFormat::CSV);
    }

    return response()->json([
        'data' =>  $datosTabla,
    ]);
});


Route::group(['as' => 'api.'], function () {
    Orion::resource('zonas', ZonaController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('departamentos', DepartamentoController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('municipios', MunicipioController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('generos', GeneroController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('universidades', UniversidadController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('roles', RoleController::class)
        ->only(['search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('roles', RoleDisableAuthorizationController::class)
        ->only(['index'])
        ->withSoftDeletes();

    Orion::resource('permisos', PermissionController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('medios-desplazamiento', MedioDesplazamientoController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('incidentes', IncidenteController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('marcadores', MarcadorController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    //Orion::resource('clasificaciones-vehicular', ClasificacionVehicularController::class)
    //->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
    //->withSoftDeletes();

    Orion::resource('vehiculos', VehiculoController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore', 'batchStore'])
        ->withSoftDeletes();

    Orion::resource('estados-solicitud', EstadoSolicitudController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('usuarios', UsuarioController::class)
        ->only(['index', 'search', 'show', 'update'])
        ->withSoftDeletes();

    Orion::resource('solicitudes-cuentas', SolicitudCuentaController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('desplazamientos', DesplazamientoController::class)
        ->only(['index', 'search', 'show', 'batchStore'])
        ->withSoftDeletes();

    Orion::resource('reporte-incidente', ReporteIncidenteController::class)
        ->only(['index', 'search', 'store', 'show', 'batchStore'])
        ->withSoftDeletes();

    Orion::resource('detalle-medio-recorrido', DetalleMedioRecorridoController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore', 'batchStore'])
        ->withSoftDeletes();

    Orion::resource('tipos-vehiculos-rutas', TiposVehiculosRutasController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('tipos-servicios-rutas', TiposServiciosRutasController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('clases-servicios-rutas', ClasesServiciosRutasController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('rutas-transporte', RutasTransporteController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('levantamientos', LevantamientoController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('reporte-marcadores', ReporteMarcadoresController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('bitacora-tablas', BitacoraTablaController::class)
        ->only(['index', 'search', 'show'])
        ->withSoftDeletes();

    Orion::resource('conteo-vehicular', LevantamientoContadorController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])
        ->withSoftDeletes();

    Orion::resource('reporte-contador', ReporteContadorController::class)
        ->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore', 'batchStore'])
        ->withSoftDeletes();

    /**
     * TODO
     * Revisar la documentación para verificar las relaciones
     * No es necesario incluirlo ya que se puede agregar cómo parametro en la asociación
     */

    // Orion::hasManyResource('zonas', 'departamentos', ZonaDepartamentoController::class);
    // Orion::hasManyResource('departamentos', 'municipios', DepartamentoMunicipioController::class);
});
