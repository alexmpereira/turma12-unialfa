@extends('app')

@section('title','Editar Cliente')
@section('content')

<form action="{{ route('clients.update', $client) }}" method="POST">

    @csrf
    @method('PUT')
    <div class="card-header">
          <strong>Editar cliente</strong>
          <br>
          <br>
          <label for="nome"  value="{{$client->nome}}" class="from-label">Nome</label>
          <br>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente">
          <br>
          <label for="endereco" class="from-label">Endereço</label>
          <br>
          <input type="text" value="{{$client->endereco}}" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço">
          <br>
          <label for="observacao" class="from-label">Observação</label>
          <br>
          <textarea class="form-control" name="observacao" id="observacao" cols="30" rows="10"> value="{{$client->observacao}}" </textarea>
          <br>
          <br>

    </div>

    <button class="btn btn-success" type="submit"> Incluir </button>
</form>

@endsection
