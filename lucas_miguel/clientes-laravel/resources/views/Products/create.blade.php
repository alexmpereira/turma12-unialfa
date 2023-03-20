@extends('app')
@section('title', 'Adicionar Novo Produto')
@section('content')

    <h1>Novo Produto</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" name="valor" id="valor" placeholder="Digite o valor" class="form-control">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Link</label>
            <textarea name="img" id="img" placeholder="Digite o link" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>

@endsection
