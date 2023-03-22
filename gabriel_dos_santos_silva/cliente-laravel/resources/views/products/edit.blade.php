@extends('app')
@section('title', 'Editar Produto')

@section('content')
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')    
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" required name="nome" value="{{$product->nome}}" id="nome" placeholder="Digite o nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" required name="valor" id="valor" value="{{$product->valor}}" placeholder="Digite o valor" class="form-control">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Link</label>
            <textarea name="img" required id="img" placeholder="Digite o link" cols="30" rows="10" class="form-control">{{$product->img}}</textarea>
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>
@endsection
