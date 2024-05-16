<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes da Receita de Salada Caesar com Ovos</title>
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
      background-size: cover;
    }

    .titulo-imagem {
      position: relative;
      text-align: center;
    }

    .titulo {
      margin-bottom: 10px; /* Adiciona espaço abaixo do título */
      color: white; /* Cor do texto */
      font-size: 36px; /* Tamanho da fonte */
      text-shadow: 2px 2px 4px #000000; /* Sombra do texto */
    }

    .imagem-salada {
      width: 150px; /* Define a largura da imagem */
      height: 150px; /* Define a altura da imagem */
      border-radius: 50%; /* Torna o elemento redondo */
      background-image: url("img/saladac.jpg"); /* Imagem da salada */
      background-size: cover; /* Ajusta a imagem para cobrir todo o elemento */
      background-position: center; /* Centraliza a imagem */
      position: absolute; /* Define a posição absoluta */
      right: 20px; /* Define a posição à direita */
      top: 50%; /* Define a posição verticalmente ao meio */
      transform: translateY(-50%); /* Ajusta a posição vertical */
    }

    @media (max-width: 768px) {
      .imagem-salada {
        width: 100px; /* Reduz a largura da imagem em dispositivos móveis */
        height: 100px; /* Reduz a altura da imagem em dispositivos móveis */
        right: 10px; /* Ajusta a posição da imagem à direita em dispositivos móveis */
      }
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

    @media (max-width: 768px) {
      .ingredientes {
        margin-bottom: 0; /* Remove o espaço abaixo dos ingredientes */
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
          <div class="imagem-salada"></div> <!-- Div para a imagem da salada -->
        </div>
        <hr>
        <div id="receita">
          <div class="ingredientes">
            <h5>Ingredientes:</h5>
            <ul>
              <li>2 ovos cozidos</li>
              <li>1 alface romana</li>
              <li>Croutons</li>
              <li>50g de queijo parmesão ralado</li>
              <li>2 filés de anchovas</li>
              <li>2 dentes de alho picados</li>
              <li>1/4 xícara de azeite de oliva</li>
              <li>2 colheres de sopa de suco de limão</li>
              <li>1 colher de sopa de mostarda Dijon</li>
              <li>Sal e pimenta a gosto</li>
            </ul>
          </div>
          <div class="instrucoes">
            <h5>Modo de Preparo:</h5>
            <p>Lave e rasgue as folhas de alface romana e coloque em uma tigela grande. Descasque os ovos cozidos e corte em fatias. Distribua os ovos cozidos sobre a alface. Adicione os croutons por cima. Em uma tigela pequena, amasse as anchovas com os dentes de alho picados. Adicione o suco de limão e a mostarda Dijon. Misture bem. Lentamente, adicione o azeite de oliva, batendo constantemente até emulsionar o molho. Tempere com sal e pimenta a gosto. Regue a salada com o molho Caesar preparado e polvilhe com queijo parmesão ralado. Sirva imediatamente.</p>
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
