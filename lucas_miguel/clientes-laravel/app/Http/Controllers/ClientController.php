<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() 
    {
        echo "<h1>Listar dados</h1>";

        // Iniciar os clientes no banco de dados
        
        return view("welcome");
    }
}
