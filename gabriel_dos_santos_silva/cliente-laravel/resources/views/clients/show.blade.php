@extends('app')
@section('title','Detalhes do cliente')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-header">
        {{$client->nome}}
    </div>
    <div class="card-body">
        <p class="card-text"><strong>ID: </strong>{{$client->id}}</p>
        <p class="card-text"><strong>Nome: </strong>{{$client->nome}}</p>
        <p class="card-text"><strong>Endereço: </strong>{{$client->endereco}}</p>
        <p class="card-text"><strong>Observação: </strong>{{$client->observacao}}</p>
        <br>
        <a href="{{route('clients.index')}}" class="btn btn-success">Voltar á lista de clientes</a>
    </div>
</div>

@endsection