<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    {{-- <div class="container">
        {{dd($clients)}}
    </div> --}}
    <nav class="navbar navbar-light bg-bgbody-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Unialfa</a>
        </div>
      </nav>

      <div class="container-fluid">
        <h1>Lista de clients</h1>
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
                @foreach($client as $client)
                    <tr>
                        <th scope="row">{{$client ->id}}</th>
                        <th scope="row">
                          <a href="{{route('client.show', $client)}}">
                              {{$client ->nome}}
                          </a> 
                        </th>
                        <th scope="row">{{$client ->endereco}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>