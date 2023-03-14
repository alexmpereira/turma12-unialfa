@extends('app')
@section('title', 'Adicionar Novo Cliente')
@section('content')

    <h1>Novo Cliente</h1>

    <form action="">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
    </form>

@endsection
