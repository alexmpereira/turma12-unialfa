@extends('app')
@section('title', 'Detalhes do Produto')
@section('content')
    <div class="card" style="max-width: 300px">
        <div class="card-header">
            Detalhes do Produto: {{ $produto->nome }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $produto->id }}</p>
            <p><strong>Nome: </strong>{{ $produto->nome }}</p>
            <p><strong>Preço: </strong>{{ $produto->preco }}</p>
            <p><strong>Quantidade: </strong>{{ $produto->quantidade }}</p>
            <br>
            <div class="text-center">
                <a href="{{ route('produtos.index') }}" class="btn btn-success">
                    Voltar para a lista de Produtos
                </a>
            </div>
        </div>
    </div>
@endsection
