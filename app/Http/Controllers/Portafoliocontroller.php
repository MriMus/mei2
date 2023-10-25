<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class Portafoliocontroller extends Controller
{
    public function index()
{
    $proyectos = Proyecto::paginate();
    return view('welcome', compact('proyectos'));
}
}
