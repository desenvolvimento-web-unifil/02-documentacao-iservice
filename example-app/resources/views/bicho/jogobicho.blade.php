@extends('admin\layout')
@section('title', 'Carrinho')
@section('conteudo')

<div id="jogodobicho">
<navbar id="navbar">
    <div class="navbar-container">
        <img src="/img/logo-BRAZSINO.png" alt="" class="logo">
        <a href="{{ route('login.logout')}}" class="a-item">Sair</a>
        <a href="{{ route('jogos-index')}}" class="a-item">Voltar</a>
    </div>
</navbar>

    <div class="div-jogo">
        <h1 id="h1-jogo">Bem-vindo ao jogo do bicho, {{ $nomeUsuario }}!</h1>
        <p id="id-jogo">Escolha um animal e realize sua aposta, lembre-se de utilizar apenas dinheiro que não fará falta no final do mês e divirta-se. <br> Seu saldo atual: R$ {{ $saldoUsuario }}</p>
    </div>

    <div>
    <table class="table-jogo">
        <tbody>
            <tr>
                <td onclick="var bicho =mostrarBicho(1)"><h1>(1) 🦩<br>Avestruz</h1></td>
                <td onclick="var bicho =mostrarBicho(2)"><h1>(2) 🦅<br>Águia</h1></td>
                <td onclick="var bicho =mostrarBicho(3)"><h1>(3) 🦟<br>Burro</h1></td>
                <td onclick="var bicho =mostrarBicho(4)"><h1>(4) 🦋<br>Borboleta</h1></td>
                <td onclick="var bicho =mostrarBicho(5)"><h1>(5) 🐕<br>Cachorro</h1></td>
            </tr>
            <tr>
                <td onclick="var bicho =mostrarBicho(6)"><h1>(6) 🐐<br>Cabrito</h1></td>
                <td onclick="var bicho =mostrarBicho(7)"><h1>(7) 🐑<br>Carneiro</h1></td>
                <td onclick="var bicho =mostrarBicho(8)"><h1>(8) 🐫<br>Camelo</h1></td>
                <td onclick="var bicho =mostrarBicho(9)"><h1>(9) 🐍<br>Cobra</h1></td>
                <td onclick="var bicho =mostrarBicho(10)"><h1>(10) 🐇<br>Coelho</h1></td>
            </tr>
            <tr>
                <td onclick="var bicho =mostrarBicho(11)"><h1>(11) 🐎<br>Cavalo</h1></td>
                <td onclick="var bicho =mostrarBicho(12)"><h1>(12) 🐘<br>Elefante</h1></td>
                <td onclick="var bicho =mostrarBicho(13)"><h1>(13) 🐓<br>Galo</h1></td>
                <td onclick="var bicho =mostrarBicho(14)"><h1>(14) 🐈<br>Gato</h1></td>
                <td onclick="var bicho =mostrarBicho(15)"><h1>(15) 🐊<br>Jacaré</h1></td>
            </tr>
            <tr>
                <td onclick="var bicho =mostrarBicho(16)"><h1>(16) 🦁<br>Leão</h1></td>
                <td onclick="var bicho =mostrarBicho(17)"><h1>(17) 🐒<br>Macaco</h1></td>
                <td onclick="var bicho =mostrarBicho(18)"><h1>(18) 🐖<br>Porco</h1></td>
                <td onclick="var bicho =mostrarBicho(19)"><h1>(19) 🦚<br>Pavão</h1></td>
                <td onclick="var bicho =mostrarBicho(20)"><h1>(20) 🦃<br>Peru</h1></td>
            </tr>
            <tr>
                <td onclick="var bicho =mostrarBicho(21)"><h1>(21) 🐂<br>Touro</h1></td>
                <td onclick="var bicho =mostrarBicho(22)"><h1>(22) 🐅<br>Tigre</h1></td>
                <td onclick="var bicho =mostrarBicho(23)"><h1>(23) 🐻<br>Urso</h1></td>
                <td onclick="var bicho =mostrarBicho(24)"><h1>(24) 🦌<br>Veado</h1></td>
                <td onclick="var bicho =mostrarBicho(25)"><h1>(25) 🐄<br>Vaca</h1></td>
            </tr>
        </tbody>
    </table>
    </div>

    <br>
    <br>

   <table>
        <tbody>
            <tr>
                <td class="escolhas">
                    <h2 class="text-body-emphasis">Você escolheu</h2>
                    <h2 id="bichoSelecionado"></h2>
                </td>
                <td class="escolhas">
                    <label for="valorAposta"><h2>Valor da aposta</h2></label><br>
                    <input type="number" id="valorAposta" name="valorAposta" min="1">
                </td>
                <td class="escolhas">
                    <button class="btn btn-primary d-inline-flex align-items-center" type="button" onclick="escolherBichoAleatorio()"><h2>Apostar</h2></button>
                </td>
            </tr>
        </tbody>
    </table> 
    
    <table>
        <tbody>
            <tr>
                <td class="escolhas"> <h2 class="text-body-emphasis">O bicho escolhido foi: <h2 id="resultado"></h2></h2> </td>
            </tr>
            <tr>
                <td class="escolhas"> <h2 id="resultadoJogo"></h2><br><h2 id="premioJogo"></h2> </td>
            </tr>
        </tbody>
    </table>
</div>
    

  <script>
        function mostrarBicho(numero) {
    var bicho;
    
    switch (numero) {
        case 1:
            bicho = "Avestruz";
            break;
        case 2:
            bicho = "Águia";
            break;
        case 3:
            bicho = "Burro";
            break;
        case 4:
            bicho = "Borboleta";
            break;
        case 5:
            bicho = "Cachorro";
            break;
        case 6:
            bicho = "Cabrito";
            break;
        case 7:
            bicho = "Carneiro";
            break;
        case 8:
            bicho = "Camelo";
            break;
        case 9:
            bicho = "Cobra";
            break;
        case 10:
            bicho = "Coelho";
            break;
        case 11:
            bicho = "Cavalo";
            break;
        case 12:
            bicho = "Elefante";
            break;
        case 13:
            bicho = "Galo";
            break;
        case 14:
            bicho = "Gato";
            break;
        case 15:
            bicho = "Jacaré";
            break;
        case 16:
            bicho = "Leão";
            break;
        case 17:
            bicho = "Macaco";
            break;
        case 18:
            bicho = "Porco";
            break;
        case 19:
            bicho = "Pavão";
            break;
        case 20:
            bicho = "Peru";
            break;
        case 21:
            bicho = "Touro";
            break;
        case 22:
            bicho = "Tigre";
            break;
        case 23:
            bicho = "Urso";
            break;
        case 24:
            bicho = "Veado";
            break;
        case 25:
            bicho = "Vaca";
            break;
        default:
            bicho = "Bicho não encontrado";
            break;
    }
    
    document.getElementById("bichoSelecionado").textContent = bicho;
  }

  function escolherBichoAleatorio() {
        var bichoEscolhido = document.getElementById("bichoSelecionado").textContent;
        var bichoAleatorio = document.getElementById("resultado").textContent;
        var resultado;
        var premio;
        var valorAposta = document.getElementById("valorAposta").value; // Obtém o valor da aposta do campo de entrada

        if (bichoEscolhido === bichoAleatorio) {
            resultado = "Você acertou o bicho!";
            premio = "Você ganhou ";
            document.getElementById("resultadoJogo").textContent = resultado;
            document.getElementById("premioJogo").textContent = premio + valorAposta * 10;
            document.getElementById("valorApostaAumento").value = valorAposta;
            document.getElementById("aumentarSaldoForm").action = document.getElementById("aumentarSaldoForm").action.replace('__valorAposta__', valorAposta);

            // Atraso de 2 segundos (2000 milissegundos) antes de enviar o formulário
            var delay = 3000;
            setTimeout(function() {
                document.getElementById("aumentarSaldoForm").submit();
            }, delay);
        } else {
            resultado = "Você errou o bicho!";
            premio = "Você não ganhou nada!";
            document.getElementById("resultadoJogo").textContent = resultado;
            document.getElementById("premioJogo").textContent = premio;
            document.getElementById("valorApostaDiminuicao").value = valorAposta;
            document.getElementById("diminuirSaldoForm").action = document.getElementById("diminuirSaldoForm").action.replace('__valorAposta__', valorAposta);

            // Atraso de 2 segundos (2000 milissegundos) antes de enviar o formulário
            var delay = 3000;
            setTimeout(function() {
                document.getElementById("diminuirSaldoForm").submit();
            }, delay);
        }

        
    }

  </script>

<form id="diminuirSaldoForm" action="{{ route('diminuir-saldo', ['valor' => '__valorAposta__']) }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" id="valorApostaDiminuicao" name="valor" value="50">
    <button id="submitdiminuirSaldoForm" type="submit">Diminuir Saldo</button>
</form>

<form id="aumentarSaldoForm" action="{{ route('aumentar-saldo', ['valor' => '__valorAposta__']) }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" id="valorApostaAumento" name="valor" value="50">
    <button id="submitaumentarSaldoForm" type="submit">Aumentar saldo</button>
</form>

@endsection
