<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    //
    public function rutas(){
        return view('rutas.rutas');
    }
}