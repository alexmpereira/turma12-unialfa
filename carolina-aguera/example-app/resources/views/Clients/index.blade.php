@extends('app')
@section('title', 'Lista de Clientes')
@section('content')
    <div class="container">
        <h1>Lista de Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <th scope='row'>{{ $client->id }}</th>
                        <td scope='row'>
                            <a href="{{ route('clients.show', $client) }}">
                                {{ $client->nome }}
                            </a>
                        </td>
                        <td scope='row'>{{ $client->endereco }}</td>
                        <td scope='row'>
                            <a class="btn btn-warning" href="{{ route('clients.edit', $client) }}">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
