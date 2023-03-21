<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Listar os clientes
     * @return view
     */
    public function index () {

     $clients = Client::get();
     return view('clients.index',[
        'clients'=> $clients
     ]);
     // Buscar os clientes no banco de dados

}

    /**
    * Mostra um cliente especifico
    *
    * @param string $id
    * @return view
    */

public function show(int $id)
{
    $client = Client::find($id);
    return view('clients.show',[
        'client' => $client
    ]);
}

    /**
    * Mostra a view de criar novos clientes
    *
    * @return view
    */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * cria um novo cliente
     *
     * @param Request @resquest
     * @return RedirectResponse
     */

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    /**
     * Mostra o formulario de editar um determinado cliente
     * @param integer $id
     * @return view
     */

    public function edit(int $id)
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
    *Realiza a edição dos dados de um cliente
    * @param Request @request
    * @return RedirectResponse
    */

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

    /**
     * Exclui um cliente
     *
     * @param integer $id
     * @return RedirectResponse
     */

    public function destroy(int $id)
    {
        $client = client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
