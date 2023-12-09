<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;

class ProveedorController extends Controller
{
    //

    public function get()
    {
        $proveedores = Proveedores::all();
        return view('proveedores', compact('proveedores'));
    }
}
