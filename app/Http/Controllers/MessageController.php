<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function messages(){
        $saludo="Hola Salao";

        return response() ->json([
            'Saludos' => $saludo
        ]);

    }
}
