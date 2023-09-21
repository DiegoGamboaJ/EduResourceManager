<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlockController extends Controller
{
    public function index()
    {
        $blocks = Block::paginate(10);

        return view('blocks.index', compact('blocks'));
    }

    public function edit(int $id)
    {
        $schedules = Schedule::all();
        $block = Block::findOrFail($id);

        return view('blocks.edit', compact('block', 'schedules'));
    }

    public function update(Request $request, int $id)
    {
        try{
        DB::beginTransaction();
        $request->validate([
            'start_time' => ['require', 'after_or_equal:07:00', 'before_or_equal:17:00'],
            'end_time' => ['require', 'after_or_equal:07:00', 'before_or_equal:17:00'],
            'schedule_id' => ['require'],
        ]);

        $block = Block::findOrFail($id);

        $block->update([
            'start_time' => $request->start,
            'end_time' => $request->end,
            'schedule_id' => $request->schedule,
        ]);
        DB::commit();
        return to_route('blocks.all')->with('success', 'Bloque actualizado correctamente.');
        } catch (ModelNotFoundException $th){
            DB::rollBack();
            return to_route('blocks.all')->with('fail', 'Bloque no encontrado.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return to_route('blocks.all')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function create()
    {
        $schedules = Schedule::all();

        return view('blocks.create', compact('schedules'));
    }

    public function save(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'start_time' => ['require', 'after_or_equal:07:00', 'before_or_equal:17:00'],
                'end_time' => ['require', 'after_or_equal:07:00', 'before_or_equal:17:00'],
                'schedule_id' => ['require'],
            ]);


        Block::create([
            'start_time' => $request->start,
            'end_time' => $request->end,
            'schedule_id' => $request->schedule,
        ]);
        DB::commit();
        return to_route('blocks.all')->with('success', 'Bloque creado correctamente.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return to_route('blocks.all')->with('fail', 'Ha ocurrido un fallo en la creacion del bloque.');
        }
    }

    public function delete(int $id)
    {
        $block = Block::find($id);

        $block->delete();

        return to_route('blocks.all')->with('success', 'El bloque a sido eliminado satisfactoriamente.');
    }
}
