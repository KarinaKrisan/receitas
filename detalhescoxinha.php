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
      background-size: cover;
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

    .imagem-coxinha {
      width: 150px; /* Define a largura da imagem */
      height: 150px; /* Define a altura da imagem */
      border-radius: 50%; /* Torna o elemento redondo */
      background-image: url("img/coxinha.jpg"); /* Imagem da coxinha */
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
      
      .imagem-coxinha {
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
              <li>2 xícaras de caldo de frango</li>
              <li>2 colheres de sopa de manteiga</li>
              <li>2 xícaras de farinha de trigo</li>
              <li>1 peito de frango cozido e desfiado</li>
              <li>1 cebola picada</li>
              <li>2 dentes de alho picados</li>
              <li>Sal, pimenta-do-reino e salsinha a gosto</li>
              <li>Óleo para fritar</li>
            </ul>
            <div class="imagem-coxinha"></div> <!-- Div para a imagem da coxinha -->
          </div>
          <div class="instrucoes">
            <h5>Modo de Preparo:</h5>
            <p>Em uma panela, aqueça o caldo de frango com a manteiga até ferver. Adicione a farinha de trigo de uma vez e mexa vigorosamente até formar uma massa homogênea que desgrude do fundo da panela. Reserve a massa. Em outra panela, refogue a cebola e o alho em um pouco de óleo. Adicione o frango desfiado e tempere com sal, pimenta e salsinha a gosto. Misture bem. Pegue porções da massa de coxinha, abra na palma da mão, coloque um pouco do recheio de frango e modele em formato de coxinha. Frite em óleo quente até dourar. Escorra em papel toalha e sirva em seguida.</p>
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
