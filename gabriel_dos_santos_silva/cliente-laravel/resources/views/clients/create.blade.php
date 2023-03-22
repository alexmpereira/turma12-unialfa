@extends('app')
@section('title', 'Adicionar Novo Cliente')
@section('content')

    <h1>Novo Cliente</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" required placeholder="Digite o nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" id="endereco" required placeholder="Digite o endereço" class="form-control">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea name="observacao" id="observacao" required placeholder="Digite o observação" cols="30" rows="10"
                class="form-control"></textarea>
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>

@endsection
