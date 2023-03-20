@extends('app')
@section('title', "{$client->nome}")
@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do Cliente {{ $client->nome }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong>{{ $client->id }}</p>
            <p><strong>Nome:</strong>{{ $client->nome }}</p>
            <p><strong>Endereço:</strong>{{ $client->endereco }}</p>
            <p><strong>Observação:</strong>{{ $client->observacao }}</p>
            <a href="{{ route('clients.index') }}" class="link-success">Voltar para lista de Clientes</a>
        </div>
    </div>
@endsection
