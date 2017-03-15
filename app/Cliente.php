<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    protected $fillable = ['rut', 'nombre', 'apellido', 'telefono', 'mail', 'direccion'];
    
    public function stock_vehiculos()
    {
        return $this->hasMany(StockVehiculo::class);    
    }
    
    public function ordenes_compra()
    {
        return $this->hasMany(OrdenCompra::class);
    }
}
