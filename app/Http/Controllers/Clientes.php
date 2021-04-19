<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;

class Clientes extends Controller
{
     /**
     * Obtener el objeto User como json
     */
    public function user(Request $request)
    {
        $clients = Clients::all();
        return response()->json($clients);
    }
}
