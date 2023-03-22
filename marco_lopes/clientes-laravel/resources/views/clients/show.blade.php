@extends('app')

@section('title','Detalhes do Cliente')
@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
          Detalhes do Cliente {{ $client->nome }}
        </div>
        <div class="card-body">
          <p><strong>ID:</strong>{{ $client->id}}</p>
          <p><strong>Nome:</strong>{{ $client->nome}}</p>
          <p><strong>Frase de Efeito:</strong>{{ $client->nada}}</p>
          <p><strong>Observação:</strong>{{ $client->observacao}}</p>
          <br>
            <a class="btn btn-dark" href="{{route('clients.index')}}">
              Voltar
            </a>
        </div>
      </div>
    </div>

@endsection
