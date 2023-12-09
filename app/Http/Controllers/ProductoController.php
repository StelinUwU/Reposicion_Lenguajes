<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function get()
    {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

 
}