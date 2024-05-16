<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <!-- Adicione os links para Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h1>Contato</h1>
  <form id="contactForm" method="post" action="enviar_contato.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="mensagem">Mensagem:</label>
      <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary mr-2">Enviar</button>
      <a href="index.php" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
  </form>
  <div id="message" class="mt-3">
    <?php
    // Verifica se a variável GET 'success' está definida e é true
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
      echo '<div class="alert alert-success">Solicitação de contato realizada com sucesso. Entraremos em contato em breve!</div>';
    } elseif (isset($_GET['success']) && $_GET['success'] == 'false') {
      echo '<div class="alert alert-danger">Não foi possível realizar a solicitação de contato pois os campos se encontram vazios.</div>';
    }
    ?>
  </div>
</div>

<!-- Adicione os scripts do Bootstrap e do jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Adicione o script JavaScript -->
<script>
  $(document).ready(function() {
    // Verificar se o formulário foi submetido com sucesso
    function checkSuccess() {
      if (window.location.href.indexOf("?success=true") !== -1) {
        $('#message').html('<div class="alert alert-success">Solicitação de contato realizada com sucesso. Entraremos em contato em breve!</div>');
        setTimeout(function() {
          window.location.href = 'index.php'; // Redirecionar após 5 segundos
        }, 5000); // Tempo em milissegundos (5 segundos)
      } else if (window.location.href.indexOf("?success=false") !== -1) {
        $('#message').html('<div class="alert alert-danger">Não foi possível realizar a solicitação de contato pois os campos se encontram vazios.</div>');
      }
    }

    // Verificar se há mensagens após 1 segundo para garantir que tenham sido renderizadas
    setTimeout(checkSuccess, 1000);
  });
</script>

</body>
</html>
