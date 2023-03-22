@extends('app')
@section('title', 'Editar Cliente')

@section('content')
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" required placeholder="Digite o nome" value="{{ $client->nome }}"
                class="form-control"
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" required id="endereco" placeholder="Digite o endereço"
                value="{{ $client->endereco }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea name="observacao" id="observacao" required placeholder="Digite o observação" cols="30" rows="10"
                class="form-control">{{ $client->observacao }}</textarea>
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>
@endsection
