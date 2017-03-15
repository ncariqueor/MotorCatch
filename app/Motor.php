<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{    
    protected $table = 'motores';
    
    protected $fillable = ['nombre_motor', 'cilindrada', 'potencia'];
    
    public function stock_vehiculos()
    {
        return $this->hasMany(StockVehiculo::class);
    }
}
