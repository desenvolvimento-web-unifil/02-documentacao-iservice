<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Braz🔔Sino</title>
    
    <style>
        table{
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }
        
        td {
            border: 1px solid black;
            padding: 10px;
        }

        .escolhas{
            margin-left: auto;
            margin-right: auto;
            border-width: 0;
        }

        .table-container {
            text-align: center;
            display: inline-block;
            cursor: pointer
        }

        .table-container td:hover {
            color: yellow;
        }
    </style>
    
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Braz🔔Sino</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Inicio</a></li>
        <li class="nav-item"><a href="/dashboard" class="nav-link">Voltar</a></li>
      </ul>
    </header>

    <div class="p-5 text-center bg-body-tertiary">
    <div class="container py-5">
      <h1 class="text-body-emphasis">Jogo do Bicho</h1>
      <p class="col-lg-8 mx-auto lead">
        Ele mesmo o clássico jogo Brasileiro!, Agora na forma digital. <br>
        Escolha um dos 25 bichos abaixo e veja se ele foi o escolhido!
      </p>
      <br>
      <br>
      <h2 class="text-body-emphasis">Escolha o seu bicho</h2>
    </div>

    <div class="table-container">
    <table>
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
                <td class="escolhas"> <h2 class="text-body-emphasis">Você escolheu<h2 id="bichoSelecionado"></h2></h2> </td>
                <td class="escolhas"> <label for="numero"><h2>Valor da aposta</h2></label><br>
                <input type="number" id="numero" name="numero"></td>
                <td class="escolhas"> <button class="btn btn-primary d-inline-flex align-items-center" onclick="escolherBichoAleatorio()" type="button"><h2>Apostar</h2></button></td>
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

    

    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Braz🔔Sino</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 BrazSino Casa de Apostas Digitais, Inc</p>
  </footer>

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
            var bichos = [
                "Avestruz", "Águia", "Burro", "Borboleta", "Cachorro",
                "Cabrito", "Carneiro", "Camelo", "Cobra", "Coelho",
                "Cavalo", "Elefante", "Galo", "Gato", "Jacaré",
                "Leão", "Macaco", "Porco", "Pavão", "Peru",
                "Touro", "Tigre", "Urso", "Veado", "Vaca"
            ];

            var indiceAleatorio = Math.floor(Math.random() * bichos.length);
            var bichoAleatorio = bichos[indiceAleatorio];

            document.getElementById("resultado").textContent = bichoAleatorio;

            var bichoEscolhido = document.getElementById("bichoSelecionado").textContent;
            var bichoAleatorio = document.getElementById("resultado").textContent;
            var resultado;
            var premio;

            if (bichoEscolhido === bichoAleatorio) {
              resultado = "Você acertou o bicho!";
              premio = "Você ganhou " 
            } else {
              resultado = "Você errou o bicho!";
              premio = "Você não ganhou nada!"

            }

            document.getElementById("resultadoJogo").textContent = resultado;
            document.getElementById("premioJogo").textContent = premio;
          }

  

  </script>
    
</body>
</html>