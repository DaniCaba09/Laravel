<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Endpoint extends Controller
{

    public function MetodoEndpoint(Request $request)
    {

        $ModelosMercedes = ["Mercedes G-63", "Mercedes Amg CLA", "Mercedes GLE"];

        return response()->json([
            'mensaje' => 'Se ha recibido la petición correctamente:',
            'datos' => $ModelosMercedes]);

    }

}
