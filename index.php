<!DOCTYPE html>
<html lang="pt-br">

 <!-- Karina de Oliveira Krisan  RA: 3020100204 -->
 <!-- Danilo Linguanote Borges   RA: 3024101630-->
 <!-- Luan Carlos de Andrade     RA: 3020106707 -->
 <!-- Ryan Araujo Palma          RA: 3020200955-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .titulo {
            text-align: center;
            margin-bottom: 30px; /* Adiciona espaço abaixo do título */
        }
        
        .pagina {
            background-color: #f2f2f2; /* Cor de fundo da página */
        }
    </style>
</head>
<body class="pagina"> <!-- Adiciona a classe à tag body -->

<div class="container">
    <h1 class="titulo">Receitas</h1> <!-- Título centralizado -->
    <div class="row">
        <?php
        // Array de receitas fictícias
        $receitas = array(
            array("title" => "Bolo", "image" => "img/bolo.jpg", "description" => "Um delicioso bolo de chocolate.", "link" => "detalhesbolo.php"),
            array("title" => "Sopa", "image" => "img/sopa.jpg", "description" => "Uma reconfortante sopa de legumes.", "link" => "detalhesopa.php"),
            array("title" => "Salada de Frutas", "image" => "img/Salada.jpg", "description" => "Uma refrescante salada de frutas.", "link" => "detalhesalada.php"),
            array("title" => "Coxinha", "image" => "img/coxinha.jpg", "description" => "Uma deliciosa coxinha.", "link" => "detalhescoxinha.php"),
            array("title" => "Strogonoff de Frango", "image" => "img/Strogonoff.jpg", "description" => "Uma ótima refeição para seu almoço", "link" => "detalhestrogonoff.php"),
            array("title" => "Salada Caesar com Ovos", "image" => "img/Saladac.jpg", "description" => "Uma maneira diferente de comer salada.", "link" => "detalhesaladac.php")
        );

        // Loop pelas receitas e exibindo na página
        foreach ($receitas as $receita) {
            echo '
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="' . $receita['image'] . '" class="card-img-top" alt="' . $receita['title'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $receita['title'] . '</h5>
                        <p class="card-text">' . $receita['description'] . '</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="' . $receita['link'] . '" class="btn btn-sm btn-outline-secondary">Ver Receita</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
    <div class="text-center">
        <a href="contato.php">Entre em contato conosco</a>
    </div>
</div>

</body>
</html>
