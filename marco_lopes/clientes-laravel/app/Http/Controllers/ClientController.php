<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index () {

     $clients = Client::get();
     return view('clients.index',[
        'clients'=> $clients
     ]);
     // Buscar os clientes no banco de dados

}
public function show(int $id)
{
    $client = Client::find($id);
    return view('clients.show',[
        'client' => $client
    ]);
}
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    public function edit(int $id)
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }
    public function update(int $id, Request $request)
    {
        $client = Client::find($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);
        return redirect('/clients');
    }
}
