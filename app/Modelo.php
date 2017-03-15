<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelos';
    
    protected $fillable = ['nombre_modelo'];
    
    public function marca(){
        return $this->belongsTo(Marca::class);
    }
    
    public function tipo()
    {
        return $this->belongsTo(TipoVehiculo::class);
    }
    
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
