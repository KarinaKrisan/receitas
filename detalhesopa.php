<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes da Receita de Sopa de Legumes</title>
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

    .imagem-sopa {
      width: 150px; /* Define a largura da imagem */
      height: 150px; /* Define a altura da imagem */
      border-radius: 50%; /* Torna o elemento redondo */
      background-image: url("img/sopa.jpg"); /* Imagem da sopa */
      background-size: cover; /* Ajusta a imagem para cobrir todo o elemento */
      background-position: center; /* Centraliza a imagem */
      position: absolute; /* Define a posição absoluta */
      right: 20px; /* Define a posição à direita */
      top: 50%; /* Define a posição verticalmente ao meio */
      transform: translateY(-50%); /* Ajusta a posição vertical */
    }

    @media (max-width: 768px) {
      .ingredientes {
        margin-bottom: 0; /* Remove o espaço abaixo dos ingredientes */
      }
      
      .imagem-sopa {
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
          <h2 class="titulo">Sopa de Legumes</h2>
        </div>
        <hr>
        <div id="receita">
          <div class="ingredientes">
            <h5>Ingredientes:</h5>
            <ul>
              <li>2 cenouras</li>
              <li>2 batatas</li>
              <li>1 abobrinha</li>
              <li>1 cebola</li>
              <li>2 dentes de alho</li>
              <li>1 litro de caldo de legumes</li>
              <li>Sal e pimenta a gosto</li>
              <li>2 colheres de sopa de azeite</li>
            </ul>
            <div class="imagem-sopa"></div> <!-- Div para a imagem da sopa -->
          </div>
          <div class="instrucoes">
            <h5>Modo de Preparo:</h5>
            <p>Descasque e corte todos os legumes em cubos pequenos. Em uma panela, aqueça o azeite e refogue a cebola e o alho até ficarem dourados. Adicione os legumes cortados e refogue por alguns minutos. Despeje o caldo de legumes na panela e tempere com sal e pimenta a gosto. Deixe cozinhar em fogo médio por cerca de 20 minutos ou até que os legumes estejam macios. Retire do fogo e sirva quente.</p>
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
