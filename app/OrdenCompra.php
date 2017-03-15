<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    protected $table = 'ordenes';
    
    protected $fillable = ['fecha_compra', 'num_cuotas'];
    
    public function cuotas()
    {
        return $this->hasMany(Cuota::class);
    }
    
    public function ventas_vehiculos()
    {
        return $this->hasMany(VentaVehiculo::class);
    }
    
    public function tipo_pago()
    {
        return $this->belongsTo(TipoPago::class);
    }
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
