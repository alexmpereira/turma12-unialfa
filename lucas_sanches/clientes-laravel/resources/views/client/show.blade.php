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
 
    <div class="card" style="width: 18rem;">
      <div class="card">
        <div class="card-header">
            Detalhes do cliente {{$client->nome}}
        </div>
        <div class="card-body">
          <p><strong>ID: </strong>{{$client->id}}</p>
          <p><strong>Nome: </strong>{{$client->nome}}</p>
          <p><strong>Endereço: </strong>{{$client->endereco}}</p>
          <p><strong>Observação: </strong>{{$client->observacao}}</p>
          <br>
          <a class="btn btn-sucess" href="{{route('client.index')}}">
            Voltar para a lista de clientes
          </a>
       
       
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>