<?php

namespace App\Http\Controllers;

use App\Http\Requests\schedule\UpdateAndStoreScheduleRequest;
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

    public function store(UpdateAndStoreScheduleRequest $request)
    {
        Schedule::create([
            'cycle' => $request->cycle,
        ]);

        return to_route('schedules.index')->with('success', 'Ciclo creado correctamente.');
    }

    public function edit(int $id)
    {
        $schedule = Schedule::findOrFail($id);

        return view('schedules.edit', compact('schedule'));
    }

    public function update(UpdateAndStoreScheduleRequest $request, int $id)
    {
        try {
            $schedule = Schedule::findOrFail($id);

            $schedule->update([
                'cycle' => $request->cycle,
            ]);
            return to_route('schedules.index')->with('success', 'Ciclo actualizado correctamente.');
        } catch (ModelNotFoundException $th) {
            return to_route('grades.index')->with('fail', 'Ciclo no encontrado.');
        } catch (\Throwable $th) {
            return to_route('grades.index')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function destroy(int $id)
    {
        $schedule = Schedule::find($id);

        $schedule->delete();

        return to_route('schedules.index')->with('success', 'El ciclo a sido eliminado satisfactoriamente.');
    }
}
