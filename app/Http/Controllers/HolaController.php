<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    //

    public function Hola(){
        $saludo="Estamos en Hola";

        return response() ->json([
            'Saludos' => $saludo
        ]);

    }
}
