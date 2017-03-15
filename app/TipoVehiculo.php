<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $table = 'tipo_vehiculos';
    
    protected $fillable = ['tipo_vehiculo'];
    
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
