<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes da Receita de Coxinha de Frango</title>
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
      background-image: url("img/coxinha.jpg"); /* Imagem da coxinha de frango */
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
          <h2 class="titulo">Coxinha de Frango</h2>
        </div>
        <hr>
        <div id="receita">
          <div class="ingredientes">
            <h5>Ingredientes:</h5>
            <ul>
              <li>500g de peito de frango desfiado</li>
              <li>1 cebola picada</li>
              <li>2 dentes de alho picados</li>
              <li>2 colheres de sopa de óleo</li>
              <li>1 xícara de caldo de frango</li>
              <li>1 xícara de farinha de trigo</li>
              <li>1/2 xícara de leite</li>
              <li>Sal e pimenta a gosto</li>
              <li>Farinha de rosca para empanar</li>
              <li>Óleo para fritar</li>
            </ul>
            <div class="imagem-bolo"></div> <!-- Novo div para a imagem da coxinha -->
          </div>
          <div class="instrucoes">
            <h5>Modo de Preparo:</h5>
            <p>Refogue a cebola e o alho no óleo até dourarem. Adicione o frango desfiado e tempere com sal e pimenta. Reserve. Em uma panela, aqueça o caldo de frango com o leite e adicione a farinha de trigo, mexendo até formar uma massa homogênea. Cozinhe até soltar do fundo da panela. Deixe esfriar. Pegue pequenas porções da massa, abra na mão e coloque o recheio de frango. Modele as coxinhas e passe na farinha de rosca. Frite em óleo quente até dourar. Sirva quente.</p>
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
