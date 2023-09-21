<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ColegioController extends Controller
{
    public function conf(){
        return view('colegio.conf');
    }

}
