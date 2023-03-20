<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::get();
        return view('produtos.index', [
            'produtos' => $produtos
        ]);
    }

    public function show(int $id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', [
            'produto' => $produto
        ]);
    }

    public function create()
    {
        return view('produtos.create');
    }


}
