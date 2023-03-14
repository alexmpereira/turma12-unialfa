@extends('app')
@section('title', 'Detalhes do Cliente')
@section('content')

<div class="card" style="max-width: 300px">
    <div class="card-header">
        Detalhes do Cliente: {{ $client->nome }}
    </div>
    <div class="card-body">
        <p><strong>ID: </strong>{{ $client->id }}</p>
        <p><strong>Nome: </strong>{{ $client->nome }}</p>
        <p><strong>Endereço: </strong>{{ $client->endereco }}</p>
        <p><strong>Observações: </strong>{{ $client->observacao }}</p>
        <br>
        <div class="text-center">
            <a href="{{ route('clients.index') }}" class="btn btn-success">
                Voltar para a lista de Clientes
            </a>
        </div>
    </div>
</div>

@endsection
