<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\UpdateAndStoreUserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $users = User::paginate(15);

        return view('users.index', compact("users"));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UpdateAndStoreUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'role' => 'profesor',
            'email' => $request->email,
            'password' => Hash::make('JWcolegio123'),
        ]);

        return to_route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit(int $id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update(UpdateAndStoreUserRequest $request, int $id)
    {
        try {
            $user = User::findOrFail($id);

            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
            ]);
            return to_route('users.index')->with('success', 'Usuario actualizado correctamente.');
        } catch (ModelNotFoundException $th) {
            return to_route('users.index')->with('fail', 'Usuario no encontrado.');
        } catch (\Throwable $th) {
            return to_route('users.index')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function passdefault(int $id)
    {
        $user = User::find($id);

        $user->update([
            'password' => Hash::make('JWcolegio123'),
        ]);

        return to_route('users.index')->with('success', 'La constraseña del usuario ' . $user->name . ' ' . $user->surname . ' ' . 'a sido restablecida.');
    }

    public function delete(int $id)
    {
        $user = User::find($id);

        $user->delete();

        return to_route('users.index')->with('success', 'El usuario a sido eliminado satisfactoriamente.');
    }
}
