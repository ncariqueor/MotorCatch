<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    protected $table = 'cuotas';
    
    protected $fillable = ['fecha_pago', 'fecha_pago_cliente', 'monto_pagar', 'monto_pagado', 'num_cuota', 'estado'];
    
    public function orden_compra(){
        return $this->belongsTo(OrdenCompra::class);
    }
}
