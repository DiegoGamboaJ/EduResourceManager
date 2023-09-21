<?php

namespace App\Http\Controllers;

use App\Http\Requests\Reserva\StoreReservaRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function save(StoreReservaRequest $request)
    {

        Reservation::create([
            'date'  =>  $request->date,
            'important' =>  $request->boolean('important') == 'on' ? 1 : 0,
            'user_id'   =>  $request->user_id,
            'grade_id'  =>  $request->grade_id,
            'block_id'  =>  $request->block_id,
        ]);

        return to_route('dashboard')->with('success', 'Reserva realizada correctamente.');
    }
}
