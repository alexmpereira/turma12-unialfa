<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {

        $clients = Client::get();

        return view('clients.index', ['clients' => $clients]);
    }

    public function show(int $id)
    {

        $client = Client::find($id);
        return view('clients.show', [
            'client' => $client
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $req)
    {
        $dados = $req->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    public function edit(int $id)
    {
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    public function update(int $id, Request $req) {
        $client = Client::find($id);
        $client->update([
            'nome' => $req->nome,
            'endereco' => $req->endereco,
            'observacao' => $req->observacao
        ]);
        return redirect('/clients');
    }
}
