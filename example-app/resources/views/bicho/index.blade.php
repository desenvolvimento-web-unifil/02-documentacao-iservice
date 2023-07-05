<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Roleta da sorte</title>
</head>
<body class="body-index">

    <navbar id="navbar">
        <div class="navbar-container">
            <img src="/img/logo-BRAZSINO.png" alt="" class="logo">
            <ul class="navbar-intems">
                <li class="nav-item">Ajuda</li>
                <a href="{{ route('login.logout')}}" class="a-item">Sair</a>
              {{-- <a href="/bicho/create" class="a-item">Criar Jogo</li>
                <a href="{{ route('login.logout')}}" class="a-item">Sair</li> --}}
            </ul>
        </div>
        <div class="navbar-right">
            <p id="saldo-usuario">Seu saldo atual: R$ {{ $saldoUsuario }}</p>
            <button id="btnAtualizarSaldo" class="green-button">Depositar</button>
            
        </div>
        <a href="{{ route('login.logout')}}" class="a-item">Sair</a>
    </navbar>
{{-- This comment will not be present in the rendered HTML --}}
  <div class="container">

<!-- Pop-up -->
<div id="popupContainer">
    <div id="popupContent">
        <h2>Atualizar Saldo</h2>
        <form id="atualizarSaldoForm" action="{{ route('depositar-saldo', ['valor' => '__valor__']) }}" method="POST">
            @csrf
            <label for="novoSaldo">Novo Saldo:</label>
            <h1>Insira o valor desejado: </h1>
            <input type="number" id="valor" name="valor" required>
            <br>
            <fieldset>
                <legend>Método de pagamento: </legend>
                <div>
                  <input type="radio" id="contactChoice1" name="contact" value="email" />
                  <label for="contactChoice1">Pix</label>
            
                  <input type="radio" id="contactChoice2" name="contact" value="phone" />
                  <label for="contactChoice2">Cartão</label>
            
                  <input type="radio" id="contactChoice3" name="contact" value="mail" />
                  <label for="contactChoice3">Cartão alimentação</label>
                </div>
              </fieldset>
            <button type="submit">Depositar</button>
        </form>
        <button id="btnFecharPopup">Fechar</button>
    </div>
</div>
    

<div class="row">
    <div class="col-sm-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Jogo do Bicho</h5>
                <p class="card-text">Jogue o jogo do bicho e teste sua sorte.</p>
                <a href="{{ route('bicho.jogobicho') }}" class="btn btn-success">Jogar</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Novo Jogo</h5>
                <p class="card-text">Crie um novo jogo e desafie seus amigos.</p>
                <a href="{{ route('jogos-create') }}" class="btn btn-success">Criar Jogo</a>
            </div>
        </div>
    </div>
</div>

</div>


 <script>
        const btnAtualizarSaldo = document.getElementById("btnAtualizarSaldo");
        const popupContainer = document.getElementById("popupContainer");
        const btnFecharPopup = document.getElementById("btnFecharPopup");

        // Adicione um evento de clique ao botão para abrir o pop-up
        btnAtualizarSaldo.addEventListener("click", () => {
        popupContainer.style.display = "block";
        });

        // Adicione um evento de clique ao botão para fechar o pop-up
        btnFecharPopup.addEventListener("click", () => {
        popupContainer.style.display = "none";
        });

        var valor = document.getElementById("valor").value;
        
        window.addEventListener('DOMContentLoaded', function() {
        document.getElementById('atualizarSaldoForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário
        
        var valor = document.getElementById("valor").value;
        var formAction = "{{ route('depositar-saldo', ['valor' => '__valor__']) }}";
        
        // Atualiza o valor do parâmetro 'valor' na URL da ação do formulário
        var newAction = formAction.replace('__valor__', valor);
        document.getElementById('atualizarSaldoForm').action = newAction;
        
        document.getElementById('atualizarSaldoForm').submit();
    });
});

</script>

  


</body>
</html>

