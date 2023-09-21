<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function all()
    {

        $users = User::paginate(15);

        return view('users.index', compact("users"));
    }

    public function create()
    {
        return view('users.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class, 'ends_with:@colegiojohnwall.cl'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'role' => 'profesor',
            'email' => $request->email,
            'password' => Hash::make('JWcolegio123'),
        ]);

        return to_route('users.all')->with('success', 'Usuario creado correctamente.');
    }

    public function edit(int $id)
    {
        // find busca en base a la primary key
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, int $id)
    {
        //$user = User::findOrFail($id);

        try {
            DB::beginTransaction();
            $user = User::findOrFail($id);

            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
            ]);
            DB::commit();
            return to_route('users.all')->with('success', 'Usuario actualizado correctamente.');
        } catch (ModelNotFoundException $th) {
            DB::rollBack();
            return to_route('users.all')->with('fail', 'Usuario no encontrado.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return to_route('users.all')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function passdefault(int $id)
    {
        $user = User::find($id);

        $user->update([
            'password' => Hash::make('JWcolegio123'),
        ]);

        return to_route('users.all')->with('success', 'La constraseña del usuario ' . $user->name . ' ' . $user->surname . ' ' . 'a sido restablecida.');
    }

    public function delete(int $id)
    {
        $user = User::find($id);

        $user->delete();

        return to_route('users.all')->with('success', 'El usuario a sido eliminado satisfactoriamente.');
    }
}
