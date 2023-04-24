<?php

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
use App\Http\Controllers\Api\ClaseVehicularController;
use App\Http\Controllers\Api\ClasificacionVehicularController;
use App\Http\Controllers\Api\DesplazamientoController;
use App\Http\Controllers\Api\DetalleMedioRecorridoController;
use App\Http\Controllers\Api\EstadoSolicitudController;
use App\Http\Controllers\Api\SolicitudCuentaController;
use App\Http\Controllers\Api\ReporteIncidenteController;
use App\Http\Controllers\Api\RutasTransporteController;
use App\Http\Controllers\Api\TiposServiciosRutasController;
use App\Http\Controllers\Api\TiposVehiculosRutasController;
use App\Http\Controllers\Api\UsuarioController;
use App\Models\CoordenadaDesplazamiento;
use App\Models\Desplazamiento;
use App\Models\DetalleMedioRecorrido;
use App\Models\SolicitudCuenta;
use App\Models\User;

use Carbon\Carbon;
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

function calcularDuracionMediosPorUuid($id)
{
    $now = Carbon::now()->toDateTimeString();
    // DetalleMedioRecorrido::truncate();

    $desplazamientosAgrupado = CoordenadaDesplazamiento::select('id', 'desplazamiento_id', 'id_medio_desplazamiento', DB::raw('MIN(fecha_registro) as fecha_inicio'), DB::raw('MAX(fecha_registro) as fecha_fin'))
        ->where('desplazamiento_id', $id)
        ->groupBy('agrupacion_medio_desplazamiento')
        ->orderBy('fecha_registro', 'asc')
        ->get();

    foreach ($desplazamientosAgrupado  as $desplazamiento) {
        $fecha = Carbon::parse($desplazamiento['fecha_fin'])->diffAsCarbonInterval(Carbon::parse($desplazamiento['fecha_inicio']));
        $duracion =  Arr::join([Str::padLeft($fecha->h, 2, '0'), Str::padLeft($fecha->i, 2, '0'), Str::padLeft($fecha->s, 2, '0')], ':');
        $desplazamiento['duracion'] = $duracion;
        $desplazamiento['fecha_creado'] = $now;
        $desplazamiento['fecha_actualizado'] = $now;
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
        return $item;
    })->toArray();

    CoordenadaDesplazamiento::insert($ruta);

    $query = CoordenadaDesplazamiento::where('desplazamiento_id', $request->uuid);

    $totalRegistros = $query->count();

    $inicioDesplazamiento = $query
        ->orderBy('fecha_registro', 'asc')
        ->first();

    $finDesplazamiento = $query
        ->orderBy('fecha_registro', 'desc')
        ->first();

    $velocidadMax = $query
        ->max('velocidad');

    $velocidadMed = $query
        ->avg('velocidad');

    $elevacionMin = $query
        ->min('altitud');

    $elevacionMax = $query
        ->max('altitud');


    Desplazamiento::updateOrCreate([
        'id' => $uuid
    ], [
        'id' => $uuid,
        'velocidad_max' => $velocidadMax,
        'velocidad_media' => $velocidadMed,
        'duracion' => Carbon::parse($finDesplazamiento->fecha_registro)->diffInMinutes(Carbon::parse($inicioDesplazamiento->fecha_registro)),
        'inicio_desplazamiento' => $inicioDesplazamiento->fecha_registro,
        'fin_desplazamiento' => $finDesplazamiento->fecha_registro,
        'elevacion_min' => $elevacionMin,
        'elevacion_max' => $elevacionMax,
    ]);
    ray([
        'id' => $uuid,
        'velocidad_max' => $velocidadMax,
        'velocidad_media' => $velocidadMed,
        'duracion' => Carbon::parse($finDesplazamiento->fecha_registro)->diffInMinutes(Carbon::parse($inicioDesplazamiento->fecha_registro)),
        'inicio_desplazamiento' => $inicioDesplazamiento->fecha_registro,
        'fin_desplazamiento' => $finDesplazamiento->fecha_registro,
        'elevacion_min' => $elevacionMin,
        'elevacion_max' => $elevacionMax,
    ]);

    calcularDuracionMediosPorUuid($uuid);

    return response()->json(['registros_insertados' =>  $totalRegistros], Response::HTTP_CREATED);
});

Route::middleware('auth:sanctum')->post('/desplazamiento/finalizar', function (Request $request) {
    $uuid = $request->uuid;
    Desplazamiento::findOrFail($uuid);
    $fechaInicio = CoordenadaDesplazamiento::where('desplazamiento_id', $uuid)->orderBy('fecha_registro', 'asc')->first();
    $fechaFin = CoordenadaDesplazamiento::where('desplazamiento_id', $uuid)->orderBy('fecha_registro', 'desc')->first();;

    $desplazamiento = Desplazamiento::updateOrCreate([
        'id' => $uuid
    ], [
        'id' => $uuid,
        'inicio_desplazamiento' => $fechaInicio->fecha_registro,
        'fin_desplazamiento' => $fechaFin->fecha_registro,
    ]);

    return response()->json(['ruta' => $desplazamiento]);
});

Route::middleware('auth:sanctum')->get('/desplazamiento/{desplazamiento}', function (Request $request, Desplazamiento $desplazamiento) {
    $coordenadas = CoordenadaDesplazamiento::with('medio')
        ->where('desplazamiento_id', $desplazamiento->id)
        // ->where('agrupacion_medio_desplazamiento', 1)
        ->orderBy('fecha_registro', 'asc')
        ->get();

    if ($request->query('tipo') == 'geojson') {
        // const defaultColor = '#37474F';
        // point.latitud,
        // point.longitud,
        // id_medio_desplazamiento
        // LineString
        ray($coordenadas->toArray())->red();
        $id = 1;
        $idGrupo = -1;
        $idMedio = -1;
        $chunck = collect();
        $agrupacion = collect();
        $limite = collect();

        // 1,5,2,1

        $colores = collect([
            '#E40066', // Caminando
            '#03CEA4', // Autobus
            '#345995', // Scooter
            '#EAC435', // Bicicleta
            '#2C302E', // Taxi
            '#FB4D3D', // Vehiculo
            '#37306B', // Motocicleta
            '#CB1C8D', // Patineta
        ]);

        foreach ($coordenadas as $coordenada) {
            $latitud = $coordenada['latitud'];
            $longitud = $coordenada['longitud'];
            $nombreMedioDesplazamiento = $coordenada['medio']['nombre'];
            $grupoActual = $coordenada['agrupacion_medio_desplazamiento'];

            if ($coordenadas->first() == $coordenada) {
                $limite->push([$latitud, $longitud]);
                $idMedio = $coordenada['id_medio_desplazamiento'];
                $idGrupo = $grupoActual;
                // $chunck->push([$longitud, $latitud]);
                // $chunck->push([$latitud, $longitud]);

                continue;
            }

            if ($coordenadas->last() == $coordenada) {
                $limite->push([$latitud, $longitud]);

                if ($chunck->isNotEmpty()) {
                    $colorChunk = $colores->get($idMedio - 1, '#37474F');
                    $agrupacion->push([
                        'type' => 'Feature',
                        'geometry' => [
                            'type' => 'LineString',
                            'coordinates' => $chunck->toArray()
                        ],
                        'properties' => [
                            'id' => $id,
                            'color' => $colorChunk,
                            'medio' => $nombreMedioDesplazamiento,
                            'id_medio' => $idMedio,
                        ],
                    ]);
                }
                continue;
            }

            if ($idGrupo != $grupoActual) {
                $idGrupo = $grupoActual;
                $colorChunk = $colores->get($idMedio - 1, '#37474F');
                // $chunck->push([$longitud, $latitud]);
                // $chunck->push([$latitud, $longitud]);
                $agrupacion->push([
                    'type' => 'Feature',
                    'geometry' => [
                        'type' => 'LineString',
                        'coordinates' => $chunck->toArray()
                    ],
                    'properties' => [
                        'id' => $id,
                        'color' => $colorChunk,
                        'medio' => $nombreMedioDesplazamiento,
                        'id_medio' => $idMedio,
                    ],
                ]);

                $id = $id + 1;
                $idMedio = $coordenada['id_medio_desplazamiento'];
                $chunck = collect();
            }

            $chunck->push([$longitud, $latitud]);
            // $chunck->push([$latitud, $longitud]);
        }

        return response()->json([
            'coleccion' =>
            [
                'type' => 'FeatureCollection',
                'features' => $agrupacion->toArray()
            ],
            'limite' => $limite->toArray()
        ]);
    }


    if ($request->query('tipo') == 'chunck') {
        // const defaultColor = '#37474F';
        // point.latitud,
        // point.longitud,
        // id_medio_desplazamiento

        $id = 1;
        $idGrupoMedioDesplazamietoInicial = -1;
        $agrupacion = collect();
        $chunck = collect();

        $colores = collect([
            '#B71C1C',
            '#F9A825',
            '#4A148C',
            '#00695C',
            '#AFB42B',
            '#311B92',
        ]);

        foreach ($coordenadas  as $coordenada) {
            $latitud = $coordenada['latitud'];
            $longitud = $coordenada['longitud'];
            $agrupacionMedioDesplazamiento = $coordenada['agrupacion_medio_desplazamiento'];

            if ($coordenadas->first() == $coordenada) {
                $idGrupoMedioDesplazamietoInicial = $agrupacionMedioDesplazamiento;
                $chunck->push([$latitud, $longitud]);
                continue;
            }

            if ($coordenadas->last() == $coordenada) {
                $idGrupoMedioDesplazamietoInicial = $agrupacionMedioDesplazamiento;
                $colorChunk = $colores->get($idGrupoMedioDesplazamietoInicial - 1, '#37474F');
                $agrupacion->push(['color' => $colorChunk, 'multilinea' => $chunck->toArray()]);
                continue;
            }

            if ($agrupacionMedioDesplazamiento != $idGrupoMedioDesplazamietoInicial) {
                $idGrupoMedioDesplazamietoInicial = $agrupacionMedioDesplazamiento;
                $colorChunk = $colores->get($idGrupoMedioDesplazamietoInicial - 1, '#37474F');
                $chunck->push([$latitud, $longitud]);
                $agrupacion->push(['color' => $colorChunk, 'multilinea' => $chunck->toArray(), 'id' => $id]);
                $id = $id + 1;
                $chunck = collect();
            }

            $chunck->push([$latitud, $longitud]);
        }

        return response()->json(['segmentos' => $agrupacion->toArray()]);
    }

    return response()->json(['coordenadas' => $coordenadas]);
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

    if (! $estado->permitir_acceso){
        throw ValidationException::withMessages([
            'block' => ['Estado de cuenta: '. $estado->nombre.'.'],
        ]);
    }

    $token =  $user->createToken($user->getNombreRoles(), [])->plainTextToken;

    return response()->json([
        'token' =>  $token
    ]);
});

Route::post('/roless', function (Request $request) {
    $request->validate([
        'nombre_rol' => ['required', 'unique:roles,name', 'max:255'],
        'permisos' => ['required', 'exists:permissions,name', 'distinct:strict'],
    ], [
        'nombre_rol.required' => 'El nombre del rol es requerido.',
        'nombre_rol.unique' => 'El nombre del rol ya existe.',
        'nombre_rol.max' => 'La longitud no debe superar los 255 caracteres.',
        'permisos.required' => 'Debe agregar al menos un permiso.',
        'permisos.exists' => 'El permiso no existe.',
        'permisos.distinct' => 'Los permisos deben ser distintos.',
    ]);

    return response()->json([
        'request' =>  $request->all()
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

Route::get('/detalle-fechas/{id}', function (Request $request, string $id) {
    $coleccion = calcularDuracionMediosPorUuid($id);
    return response()->json(['desplazamiento' => $coleccion]);
});

Route::middleware('auth:sanctum')->post('/usuario/admin', function (Request $request) {
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

        SolicitudCuenta::create([
            'id_usuario' => $usuario->id,
            'id_estado_solicitud' => $ID_ESTADO_ACTIVA,
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


Route::group(['as' => 'api.'], function () {
    Orion::resource('zonas', ZonaController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('departamentos', DepartamentoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('municipios', MunicipioController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('generos', GeneroController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('universidades', UniversidadController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('roles', RoleController::class)->only(['search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('roles', RoleDisableAuthorizationController::class)->only(['index'])->withSoftDeletes();
    Orion::resource('permisos', PermissionController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('medios-desplazamiento', MedioDesplazamientoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('incidentes', IncidenteController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('marcadores', MarcadorController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('clasificaciones-vehicular', ClasificacionVehicularController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('clases-vehicular', ClaseVehicularController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('vehiculos', VehiculoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore', 'batchStore'])->withSoftDeletes();
    Orion::resource('estados-solicitud', EstadoSolicitudController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('usuarios', UsuarioController::class)->only(['index', 'search', 'show', 'update'])->withSoftDeletes();
    Orion::resource('solicitudes-cuentas', SolicitudCuentaController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('desplazamientos', DesplazamientoController::class)->only(['index', 'search', 'show', 'batchStore'])->withSoftDeletes();
    Orion::resource('reporte-incidente', ReporteIncidenteController::class)->only(['index', 'search', 'store', 'show', 'batchStore'])->withSoftDeletes();
    Orion::resource('detalle-medio-recorrido', DetalleMedioRecorridoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore', 'batchStore'])->withSoftDeletes();
    Orion::resource('tipos-vehiculos-rutas', TiposVehiculosRutasController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('tipos-servicios-rutas', TiposServiciosRutasController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('clases-servicios-rutas', ClasesServiciosRutasController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('rutas-transporte', RutasTransporteController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();

    /**
     * TODO
     * Revisar la documentación para verificar las relaciones
     * No es necesario incluirlo ya que se puede agregar cómo parametro en la asociación
     */

    // Orion::hasManyResource('zonas', 'departamentos', ZonaDepartamentoController::class);
    // Orion::hasManyResource('departamentos', 'municipios', DepartamentoMunicipioController::class);
});
