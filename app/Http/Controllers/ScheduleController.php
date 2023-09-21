<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();

        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('schedules.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'cycle' => ['required', 'string', 'max:10', 'unique:' . Schedule::class, 'regex:/^[1-9]° ciclo$/'],
        ]);

        $schedule = Schedule::create([
            'cycle' => $request->cycle,
        ]);

        return to_route('schedules.all')->with('success', 'Ciclo creado correctamente.');
    }

    public function edit(int $id)
    {
        $schedule = Schedule::findOrFail($id);

        return view('schedules.edit', compact('schedule'));
    }

    public function update(Request $request, int $id)
    {
        try {
            DB::beginTransaction();
            $schedule = Schedule::findOrFail($id);

            $schedule->update([
                'cycle' => $request->cycle,
            ]);
            DB::commit();
            return to_route('schedules.all')->with('success', 'Ciclo actualizado correctamente.');
        } catch (ModelNotFoundException $th) {
            DB::rollBack();
            return to_route('grades.all')->with('fail', 'Ciclo no encontrado.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return to_route('grades.all')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function delete(int $id)
    {
        $schedule = Schedule::find($id);

        $schedule->delete();

        return to_route('schedules.all')->with('success', 'El ciclo a sido eliminado satisfactoriamente.');
    }
}
