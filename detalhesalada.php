<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes da Receita de Salada de Frutas</title>
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

    .imagem-salada {
      width: 150px; /* Define a largura da imagem */
      height: 150px; /* Define a altura da imagem */
      border-radius: 50%; /* Torna o elemento redondo */
      background-image: url("img/salada.jpg"); /* Imagem da salada */
      background-size: cover; /* Ajusta a imagem para cobrir todo o elemento */
      background-position: center; /* Centraliza a imagem */
      position: absolute; /* Define a posição absoluta */
      right: 20px; /* Define a posição à direita */
      top: 50%; /* Define a posição verticalmente ao meio */
      transform: translateY(-50%); /* Ajusta a posição vertical */
    }
  </style>
</head>
<body class="pagina">

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="titulo-imagem">
          <h2 class="titulo">Salada de Frutas</h2>
        </div>
        <hr>
        <div id="receita">
          <div class="ingredientes">
            <h5>Ingredientes:</h5>
            <ul>
              <li>1 maçã</li>
              <li>1 banana</li>
              <li>1 laranja</li>
              <li>1 kiwi</li>
              <li>1 pêssego</li>
              <li>1 xícara de morangos</li>
              <li>Suco de 1 limão</li>
              <li>2 colheres de sopa de mel</li>
            </ul>
            <div class="imagem-salada"></div> <!-- Div para a imagem da salada -->
          </div>
          <div class="instrucoes">
            <h5>Modo de Preparo:</h5>
            <p>Lave e descasque todas as frutas, retirando as sementes e cortando-as em pedaços pequenos. Coloque as frutas cortadas em uma tigela grande. Regue com o suco de limão e o mel. Misture delicadamente para que todas as frutas fiquem envolvidas no suco de limão e mel. Leve à geladeira por cerca de 30 minutos antes de servir.</p>
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
