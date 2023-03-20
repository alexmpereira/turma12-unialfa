@extends('app')
@section('title', 'Listagem de Produtos')
@section('content')
    <br>
    <h1>Lista de Produtos</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <th scope="col">{{ $produto->id }}</th>
                    <td>
                        <a href="{{ route('produtos.show', $produto) }}">
                            {{ $produto->nome }}
                        </a>
                    </td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->quantidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('produtos.create') }}">
        Novo Produto
    </a>
@endsection
