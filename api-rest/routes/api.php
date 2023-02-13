<?php

use App\Http\Controllers\Api\ZonaController;
use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\GeneroController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UniversidadController;
use App\Http\Controllers\Api\IncidenteController;
use App\Http\Controllers\Api\MarcadorController;
use App\Http\Controllers\Api\MedioDesplazamientoController;
use App\Http\Controllers\Api\RoleDisableAuthorizationController;
use App\Models\SolicitudCuenta;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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

    $nombrePermisos =  $user->getPermisos();
    $token =  $user->createToken('sanctum',  $nombrePermisos)->plainTextToken;

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

Route::post('/usuario/admin', function (Request $request) {
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
    /**
     * TODO
     * Remover metodos innecesarios de los resources
     */
    Orion::resource('zonas', ZonaController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('departamentos', DepartamentoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('municipios', MunicipioController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('generos', GeneroController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('universidades', UniversidadController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('roles', RoleController::class)->only(['search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('roles', RoleDisableAuthorizationController::class)->only(['index'])->withSoftDeletes();
    Orion::resource('medios-desplazamiento', MedioDesplazamientoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('incidentes', IncidenteController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();
    Orion::resource('marcadores', MarcadorController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy', 'restore'])->withSoftDeletes();

    /**
     * TODO
     * Revisar la documentación para verificar las relaciones
     * No es necesario incluirlo ya que se puede agregar cómo parametro en la asociación
     */

    // Orion::hasManyResource('zonas', 'departamentos', ZonaDepartamentoController::class);
    // Orion::hasManyResource('departamentos', 'municipios', DepartamentoMunicipioController::class);
});
