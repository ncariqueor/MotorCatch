<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    
    protected $fillable = ['nombre_marca'];
    
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
