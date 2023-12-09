<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    //

    public function get()
    {
        $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    }

}
