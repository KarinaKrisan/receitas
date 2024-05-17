<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes da Receita da Salada Caesar</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .pagina {
      background-color: #fff; /* Cor de fundo da página */
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background-image: url("img/Baked.jpg");
    }

    .titulo {
      text-align: center;
      margin-bottom: 10px; /* Adiciona espaço abaixo do título */
      color: white; /* Cor do texto */
      font-size: 36px; /* Tamanho da fonte */
      text-shadow: 2px 2px 4px #000000; /* Sombra do texto */
    }

    .instrucoes {
      background-color: #fff; /* Cor de fundo */
      padding: 20px; /* Espaçamento interno */
      border-radius: 10px; /* Borda arredondada */
      margin-top: 20px; /* Espaço acima das instruções */
    }

    .ingredientes {
      background-color: #fff; /* Cor de fundo */
      padding: 20px; /* Espaçamento interno */
      border-radius: 10px; /* Borda arredondada */
      margin-bottom: 20px; /* Espaço abaixo dos ingredientes */
      position: relative; /* Define a posição relativa para o elemento pai */
    }

    .imagem-bolo {
      width: 150px; /* Reduzindo o tamanho da imagem */
      height: 150px; /* Reduzindo o tamanho da imagem */
      border-radius: 50%; /* Torna o elemento redondo */
      background-image: url("img/saladac.jpg"); /* Imagem da salada Caesar */
      background-size: cover; /* Ajusta a imagem para cobrir todo o elemento */
      background-position: center; /* Centraliza a imagem */
      position: absolute; /* Altera a posição */
      right: 20px; /* Centraliza à direita */
      top: 50%; /* Alinha ao meio verticalmente */
      transform: translateY(-50%); /* Ajusta a posição vertical */
    }

    @media (max-width: 768px) {
      .ingredientes {
        margin-bottom: 0; /* Remove o espaço abaixo dos ingredientes */
      }
      
      .imagem-bolo {
        display: none; /* Esconde a imagem em dispositivos móveis */
      }
    }
  </style>
</head>
<body class="pagina">

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="titulo-imagem">
          <h2 class="titulo">Salada Caesar com Ovos</h2>
        </div>
        <hr>
        <div id="receita">
          <div class="ingredientes">
            <h5>Ingredientes:</h5>
            <ul>
              <li>1 pé de alface romana</li>
              <li>2 ovos cozidos</li>
              <li>1/2 xícara de croutons</li>
              <li>1/4 xícara de queijo parmesão ralado</li>
              <li>Molho Caesar a gosto</li>
              <li>Sal e pimenta a gosto</li>
            </ul>
            <div class="imagem-bolo"></div> <!-- Novo div para a imagem da salada -->
          </div>
          <div class="instrucoes">
            <h5>Modo de Preparo:</h5>
            <p>Lave bem as folhas de alface e seque-as. Cozinhe os ovos até ficarem firmes, depois descasque e corte em pedaços. Em uma tigela grande, misture o alface, os ovos, os croutons e o queijo parmesão. Adicione o molho Caesar e misture bem. Tempere com sal e pimenta a gosto. Sirva imediatamente.</p>
          </div>
        </div>
        <button class="btn btn-primary mt-3" onclick="voltar()">Voltar</button>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Função para voltar para a página anterior (index.php)
    function voltar() {
      window.location.href = 'index.php';
    }
  </script>
</body>
</html>
