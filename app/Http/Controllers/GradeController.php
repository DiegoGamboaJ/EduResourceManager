<?php

namespace App\Http\Controllers;

use App\Http\Requests\grade\UpdateAndStoreGradeRequest;
use App\Models\Grade;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::paginate(10);

        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        $schedules = Schedule::all();

        return view('grades.create', compact('schedules'));
    }

    public function store(UpdateAndStoreGradeRequest $request)
    {
        try {
            Grade::create([
                'name' => $request->name,
                'schedule_id' => $request->schedule,
            ]);

            return to_route('grades.all')->with('success', 'Curso creado correctamente.');
        } catch (\Throwable $th) {
            return response()->json(['status' => 'fail', 'message' => 'Error al agregar un grado']);
        }
    }

    public function edit(int $id)
    {
        $schedules = Schedule::all();
        $grade = Grade::find($id);

        return view('grades.edit', compact('grade', 'schedules'));
    }

    public function update(UpdateAndStoreGradeRequest $request, int $id)
    {
        try {
            $grade = Grade::findOrFail($id);

            $grade->update([
                'name' => $request->name,
                'schedule_id' => $request->schedule,
            ]);
            return to_route('grades.all')->with('success', 'Curso actualizado correctamente.');
        } catch (ModelNotFoundException $th) {
            return to_route('grades.all')->with('fail', 'Curso no encontrado.');
        } catch (\Throwable $th) {
            return to_route('grades.all')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function destroy(int $id)
    {
        $grade = Grade::find($id);

        $grade->delete();

        return to_route('grades.all')->with('success', 'El curso a sido eliminado satisfactoriamente.');
    }
}
