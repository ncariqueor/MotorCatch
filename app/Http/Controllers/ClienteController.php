<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClienteController extends Controller
{
    public function register(){
        return view('registro/register');
    }
}