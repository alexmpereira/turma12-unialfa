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
            </div>
        @endforeach
    </div>
@endsection
