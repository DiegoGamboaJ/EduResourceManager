<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function save(Request $request)
    {
        // $contains = Str::contains($request->name, '°');

        $request->validate([
            'name' => ['required', 'string', 'max:6', 'unique:' . Grade::class, 'regex:/^[1-8]°[A-F]$/'],
            'schedule' => ['required'],
        ]);

        Grade::create([
            'name' => $request->name,
            'schedule_id' => $request->schedule,
        ]);

        return to_route('grades.all')->with('success', 'Curso creado correctamente.');
    }

    public function edit(int $id)
    {
        $schedules = Schedule::all();
        $grade = Grade::find($id);

        return view('grades.edit', compact('grade', 'schedules'));
    }

    public function update(Request $request, int $id)
    {
        try {
            DB::beginTransaction();
            $grade = Grade::findOrFail($id);

            $grade->update([
                'name' => $request->name,
                'schedule_id' => $request->schedule,
            ]);
            DB::commit();
            return to_route('grades.all')->with('success', 'Curso actualizado correctamente.');
        } catch (ModelNotFoundException $th) {
            DB::rollBack();
            return to_route('grades.all')->with('fail', 'Curso no encontrado.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return to_route('grades.all')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function delete(int $id)
    {
        $grade = Grade::find($id);

        $grade->delete();

        return to_route('grades.all')->with('success', 'El curso a sido eliminado satisfactoriamente.');
    }
}
