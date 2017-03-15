<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmision extends Model
{
    protected $table = 'transmisiones';
    
    protected $fillable = ['tipo_transmision'];
    
    public function stock_vehiculos()
    {
        return $this->hasMany(StockVehiculo::class);
    }
}
