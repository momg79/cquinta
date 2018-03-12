<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idJugador',
        'nombreJugador',
        'apoderado',
        'correoapoderado',
        'numcuota',
        'idPeriodo',
        'periodo',
        'montoCobro',
        'montoAbonado',
        'estadoPago',
        'formaPago',
        'detalle',
    ];


    
}
