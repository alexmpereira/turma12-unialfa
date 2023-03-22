<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $req)
    {
        $dados = $req->except('_token');
        Product::create($dados);
        return redirect('/products');
    }


    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    
    public function update(int $id, Request $req)
    {
        $product = Product::find($id);
        $product->update([
            'nome' => $req->nome,
            'valor' => $req->valor,
            'img' => $req->img
        ]);
        return redirect('/products');
    }


    /**
     * Exclui um cliente
     * @param int $id
     * @return RedirectResponse
     */

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
