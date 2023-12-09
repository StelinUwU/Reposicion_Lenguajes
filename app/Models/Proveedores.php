<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [
        'nombre',
        'fechaRegistro',
        'telefono',
        'correo'
    ];
}