<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Device;
use App\Models\Grade;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $grades = Grade::all();
            $users = User::where('role', 'profesor')->get();
            $blocks = Block::all();
            $devices = Device::all();

            $reservations = Reservation::with('block', 'grade')->get();

            return view('dashboard', compact('reservations', 'grades', 'users', 'blocks', 'devices'));
        } catch (\Throwable $th) {
            return response()->json(['status' => 'Fail', 'message' =>'Ah ocurrido un error inesperado']);
        }
    }
}
