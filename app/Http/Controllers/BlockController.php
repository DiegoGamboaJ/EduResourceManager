<?php

namespace App\Http\Controllers;

use App\Http\Requests\block\UpdateAndStoreBlockRequest;
use App\Models\Block;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BlockController extends Controller
{
    public function index()
    {
        try {
            $blocks = Block::paginate(10);

            return view('blocks.index', compact('blocks'));
        } catch (\Throwable $th) {
            return response()->json(['statu' => 'fail', 'message' => 'Error al cargar la pagina']);
        }
    }

    public function edit(int $id)
    {
        try {
            $schedules = Schedule::all();
            $block = Block::findOrFail($id);

            return view('blocks.edit', compact('block', 'schedules'));
        } catch (\Throwable $th) {
            return response()->json(['statu' => 'fail', 'message' => 'Error al cargar la pagina']);
        }
    }

    public function update(UpdateAndStoreBlockRequest $request, int $id)
    {
        try {
            $block = Block::findOrFail($id);

            $block->update([
                'start_time' => $request->start,
                'end_time' => $request->end,
                'schedule_id' => $request->schedule,
            ]);
            return to_route('blocks.index')->with('success', 'Bloque actualizado correctamente.');
        } catch (ModelNotFoundException $th) {
            return to_route('blocks.index')->with('fail', 'Bloque no encontrado.');
        } catch (\Throwable $th) {
            return to_route('blocks.index')->with('fail', 'Ha ocurrido un fallo en la actualizacion.');
        }
    }

    public function create()
    {
        try {
            $schedules = Schedule::all();

            return view('blocks.create', compact('schedules'));
        } catch (\Throwable $th) {
            return response()->json(['statu' => 'fail', 'message' => 'Error al cargar la pagina']);
        }
    }

    public function store(UpdateAndStoreBlockRequest $request)
    {
        try {
            Block::create([
                'start_time' => $request->start,
                'end_time' => $request->end,
                'schedule_id' => $request->schedule,
            ]);
            return to_route('blocks.index')->with('success', 'Bloque creado correctamente.');
        } catch (\Throwable $th) {
            return to_route('blocks.index')->with('fail', 'Ha ocurrido un fallo en la creacion del bloque.');
        }
    }

    public function destroy(int $id)
    {
        try {
            $block = Block::findOrFail($id);

            $block->delete();

            return to_route('blocks.index')->with('success', 'El bloque a sido eliminado satisfactoriamente.');
        } catch (ModelNotFoundException $th){
            return response()->json(['statu' => 'fail', 'message' => 'Bloque no encontrado']);
        } catch (\Throwable $th) {
            return response()->json(['statu' => 'fail', 'message' => 'Ha ocurrido un fallo en la eliminacion del bloque']);
        }
    }
}
