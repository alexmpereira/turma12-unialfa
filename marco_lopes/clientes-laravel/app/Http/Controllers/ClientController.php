<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index ()
    {
        $clients = Client::get();
        return view('clients.index', [
            'client' => $clients
        ]);
    }

    public function show(int $id)
    {
        $clients = Client::find($id);
        return view('clients.show', [
            'clients' => $clients
        ]);
    }
}
