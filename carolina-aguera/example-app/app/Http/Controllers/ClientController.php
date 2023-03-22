<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Lista os Clientes
     *
     * @return View
     */
    public function index(): View
    {
        $clients =  Client::get();
        return view('clients.index', ['clients' => $clients]);
    }


    /**
     * Mostra um cliente específico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id)
    {
        $client = Client::find($id);
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Mostra a view para criar um novo cliente
     *
     * @return View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Cria um novo cliente
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect()->route('clients.index');
    }

    /**
     * Mostra o formulário para edição de um cliente
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id)
    {
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Atualiza de um cliente específico
     *
     * @param integer $id
     * @param Request $request
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
        return redirect()->route('clients.index');
    }

    /**
     * Deleta um cliente específico
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients.index');
    }
}
