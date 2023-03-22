@extends('app')
@section('title', 'Editar Cliente')
@section('content')
    <form action="{{ route('clients.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"
                value="{{ $client->nome }}">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço"
                value="{{ $client->endereco }}">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="10">{{ $client->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
