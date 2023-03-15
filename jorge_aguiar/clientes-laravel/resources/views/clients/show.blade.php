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
            <div class="text-center row">
                <div class="col">
                    <a href="{{ route('clients.index') }}" class="btn btn-danger">
                        Voltar
                    </a>
                </div>

                <div class="col">
                    <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
