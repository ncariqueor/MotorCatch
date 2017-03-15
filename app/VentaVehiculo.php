<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentaVehiculo extends Model
{
    protected $table = 'venta_vehiculos';
    
    public function stock_vehiculo()
    {
        return $this->belongsTo(StockVehiculo::class);
    }
    
    public function orden_compra()
    {
        return $this->belongsTo(OrdenCompra::class);
    }
}
