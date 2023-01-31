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
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Orion\Facades\Orion;
use Spatie\Permission\Models\Role;

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
        // 'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['Las credenciales proporcionadas son incorrectas.'],
        ]);
    }

    $token =  $user->createToken('sanctum')->plainTextToken;

    return response()->json([
        'token' =>  $token
    ]);
});

Route::post('/usuario', function (Request $request) {
    $request->validate([
        'email' => ['required', 'email', 'unique:users,email', 'max:255'],
        'password' => ['required'],
        'nombre_usuario' => ['nullable'],
        'roles' => ['required', 'exists:roles,id'],
    ]);
    DB::beginTransaction();
    try {
        $usuario = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->nombre_usuario ?? '',
        ]);

        $idRoles = gettype($request->roles) == 'integer' ? [$request->roles] : $request->roles;

        $roles = Role::whereIn('id', $idRoles);
        foreach ($roles as $rol) {
            $usuario->assignRole($rol->name);
        }
        DB::commit();

        return response()->json([
            'usuario' =>  $usuario
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
    Orion::resource('zonas', ZonaController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('departamentos', DepartamentoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('municipios', MunicipioController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('generos', GeneroController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('universidades', UniversidadController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('roles', RoleController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('medios-desplazamiento', MedioDesplazamientoController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('incidentes', IncidenteController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);
    Orion::resource('marcadores', MarcadorController::class)->only(['index', 'search', 'show', 'store', 'update', 'destroy']);

    /**
     * TODO
     * Revisar la documentación para verificar las relaciones
     * No es necesario incluirlo ya que se puede agregar cómo parametro en la asociación
     */

    // Orion::hasManyResource('zonas', 'departamentos', ZonaDepartamentoController::class);
    // Orion::hasManyResource('departamentos', 'municipios', DepartamentoMunicipioController::class);
});
