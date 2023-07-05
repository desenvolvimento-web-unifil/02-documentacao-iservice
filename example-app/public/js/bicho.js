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