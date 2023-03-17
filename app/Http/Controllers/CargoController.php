<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function index(){
        $cargos = Cargo::all();
        return view('cargos.index' ,compact('cargos'));
    }
}
