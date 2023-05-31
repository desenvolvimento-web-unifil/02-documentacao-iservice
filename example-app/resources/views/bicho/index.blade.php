<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body class="body-index">

    <navbar id="navbar">
        <div class="navbar-container">
            <img src="/img/logo-BRAZSINO.png" alt="" class="logo">
            <ul class="navbar-intems">
                <li class="nav-item">Ajuda</li>
                <a href="/bicho/create" class="a-item">Criar Jogo</li>
            </ul>
        </div>
    </navbar>

  <div class="container">
    <div class="row">
        <div class="col-sm-3">
            <a href="{{route('jogos-create')}}" class="btn btn-success">Novo Jogo</a>
        </div>
    </div>
<table class="table">
    <thead>
        <tr>
            <th class ="th-table" scope="col">#</th>
            <th class ="th-table" scope="col">Nome</th>
            <th class ="th-table" scope="col">Dificudade</th>
            <th class ="th-table" scope="col">Valor</th>
            <th class ="th-table" scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jogos as $jogo)
        <tr>
            <th class ="th-table" >{{ $jogo->id}}</th>
            <th class ="th-table" >{{ $jogo->nome}}</th>
            <th class ="th-table" >{{ $jogo->dificuldade}}</th>
            <th class ="th-table" >{{ $jogo->valor}}</th>
            <th class ="th-table" >{{ $jogo->descricao}}</th>
       </tr>
        @endforeach
        </tbody>
    </table>
</div>





  


</body>
</html>

