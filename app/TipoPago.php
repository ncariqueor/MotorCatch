<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    protected $table = 'tipo_pagos';
    protected $fillable = ['tipo_pago'];
    
    public function ordenes_compra()
    {
        return $this->hasMany(OrdenCompra::class);
    }
}
