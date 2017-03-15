<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockVehiculo extends Model
{
    protected $table = 'stock_vehiculos';
    
    protected $fillable = ['precio', 'num_puertas', 'num_asientos', 'fecha_stock', 'estado_stock'];
    
    //Relación 1:1, un vehículo puede ser vendido en una sola venta, y una venta puede tener un solo vehículo
    public function venta_vehiculo() 
    {
        return $this->hasOne(VentaVehiculo::class);
    }
    
    public function motor()
    {
        return $this->belongsTo(Motor::class);
    }
    
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
    
    //Llave foránea del dueño (a su vez cliente)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    
    public function transmision()
    {
        return $this->belongsTo(Transmision::class);
    }
}
