@extends('app')
@section('title', 'Lista de Produtos')

@section('content')
    <a class="btn btn-success" href="{{ route('products.create') }}">Novo Produto</a>
    <div class="row">
        @foreach ($products as $product)
            <div class="card m-5" style="width: 18rem;">
                <div class="card-header text-center">
                    {{ $product->nome }}
                </div>
                <img src="{{ $product->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><strong>ID: </strong>{{ $product->id }}</p>
                    <p class="card-text"><strong>Nome: </strong>{{ $product->nome }}</p>
                    <p class="card-text"><strong>Valor: </strong>{{ $product->valor }}</p>
                    <br>
                </div>
                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger w-100" type="submit" onclick="confirm('Tem certeza?')">
                        Excluir
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
