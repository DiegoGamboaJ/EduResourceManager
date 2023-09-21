<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Grade;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $grades = Grade::all();
        $users = User::where('role','profesor')->get();
        $blocks = Block::all();

        $reservations = Reservation::with('block', 'grade')->get();

        return view('dashboard', compact('reservations', 'grades', 'users', 'blocks'));
    }
}
