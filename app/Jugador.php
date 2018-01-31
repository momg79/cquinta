<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rut',
        'nombre',
        'apellido_materno',
        'apellido_paterno',
        'fecha_nacimiento',
        'fecha_ingreso',
        'categoria',
        'telefono1',
        'telefono2',
        'correo',
        'direccion',
        'apoderado',
        'telefonoapoderado',
        'correoapoderado',
        'estado_alumno'
    ];
}
