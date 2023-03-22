<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * Carrega a tela de listagem
     * 
     * @return View 
     */

    public function index()
    {

        $clients = Client::get();

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Mostra o cliente em específico
     * @param integer $id
     * @return View
     */

    public function show(int $id)
    {

        $client = Client::find($id);
        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Mostra a view de criar novos clientes
     * @return View
     */

    public function create()
    {
        return view('clients.create');
    }


    /**
     * Cria um novo cliente
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $req)
    {
        $dados = $req->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    /**
     * Carrega tela para editar cliente
     * @param int $id
     * @return View
     */

    public function edit(int $id)
    {
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Atualiza um cliente
     * @param int $id
     * @param Request $req
     * @return RedirectResponse
     */

    public function update(int $id, Request $req)
    {
        $client = Client::find($id);
        $client->update([
            'nome' => $req->nome,
            'endereco' => $req->endereco,
            'observacao' => $req->observacao
        ]);
        return redirect('/clients');
    }

    /**
     * Exclui um cliente
     * @param int $id
     * @return RedirectResponse
     */

    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('/clients');
    }
}
