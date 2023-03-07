<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index() {
        echo "opa galerinha do mal";

        return view('welcome');
    }
}
