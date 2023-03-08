<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients =  Client::get();
        return view('clients.index', ['clients' => $clients]);
    }

    public function show(int $id)
    {
        $client = Client::find($id);
        return view('clients.show', ['client' => $client]);
    }
}
