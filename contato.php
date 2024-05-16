<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <br>
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Adicione seu estilo personalizado aqui, se necessário */
        .title-container {
            text-align: center;
            margin-bottom: 20px;
        }

        #successMessage {
            display: none;
            text-align: center;
            margin-top: 10px;
            color: green;
        }

        /* Novo CSS adicionado */
        .pagina {
            background-color: #fff; /* Cor de fundo da página */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: url("img/Baked.jpg");
        }
    </style>
</head>
<body class="pagina"> <!-- Adicionei a classe "pagina" para aplicar o novo estilo -->
    <div class="container">
        <div class="title-container">
            <h1>Fale Conosco</h1>
        </div>
        
        <form id="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar <i class="fas fa-paper-plane"></i></button>
            <a href="#" class="btn btn-secondary" onclick="history.back()">Voltar <i class="fas fa-arrow-left"></i></a>
            <div id="successMessage"><i class="fas fa-check-circle"></i> Mensagem enviada com sucesso!</div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Adicione scripts de validação aqui, se necessário
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault(); // Impede o envio padrão do formulário
                $.ajax({
                    type: 'POST',
                    url: 'contato.php', // URL do próprio script PHP
                    data: $(this).serialize(),
                    success: function() {
                        $('#successMessage').fadeIn().delay(5000).fadeOut(400, function() {
                            window.location.href = 'contato.php'; // Redireciona de volta ao formulário
                        });
                    }
                });
            });
        });
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        // Verifica se todos os campos foram preenchidos
        if (!empty($name) && !empty($email) && !empty($message)) {
            $formatted_message = "Nome: $name\nEmail: $email\nMensagem: $message\n\n";

            // Verifica se a mensagem já existe no arquivo
            $contents = file_get_contents("recebido.txt");
            if (strpos($contents, $formatted_message) === false) {
                // Se a mensagem não existe, adiciona ao arquivo
                file_put_contents("recebido.txt", $formatted_message, FILE_APPEND);
            }
        }
    }
    ?>
</body>
</html>
