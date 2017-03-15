<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    
    protected $fillable = ['patente', 'year'];
    
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }
    
    public function stock_vehiculos()
    {
        return $this->hasMany(StockVehiculo::class);
    }
}
