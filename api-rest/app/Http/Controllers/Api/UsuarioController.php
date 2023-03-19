<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Orion\Http\Requests\Request;
use Orion\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    protected $model = User::class;

    public function includes(): array
    {
        return ['solicitud.estado', 'solicitud', 'rol'];
    }

    /**
     * Fills attributes on the given entity and update it in database.
     *
     * @param Request $request
     * @param Model $user
     * @param array $attributes
     */
    protected function performUpdate(Request $request, Model $user, array $attributes): void
    {
        $user->fill(['password' => Hash::make($request->password),]);
        $user->save();
    }
}
