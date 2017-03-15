<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TipoVehiculo;

class TipoVehiculoController extends Controller
{
    public function showTipoVehiculos()
    {
        $tipo_vehiculos = TipoVehiculo::all();

        return view('welcome', compact('tipo_vehiculos'));
    }
}
