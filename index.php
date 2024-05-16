<!DOCTYPE html>
<html lang="pt-br">
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
            position: relative;
            min-height: 100vh; /* Mantém o footer na parte inferior */
            padding-bottom: 50px; /* Adiciona espaço para o footer */
        }

        .search-bar {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .search-bar input[type="text"] {
            padding: 10px 20px;
            width: 200px;
            border-radius: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            background-image: url('https://image.flaticon.com/icons/svg/483/483356.svg');
            background-position: 95% 50%;
            background-repeat: no-repeat;
        }

        .search-bar button {
            margin-top: 10px;
            padding: 10px 15px;
            width: 100px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn-rounded {
            border-radius: 20px; /* Torna o botão redondinho */
        }

        .contato-link {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }

        /* Diminui o tamanho das imagens das receitas */
        .card-img-top {
            height: 150px; /* Reduzindo a altura da imagem */
            object-fit: cover;
        }

        /* Adiciona uma borda preta em volta de cada card */
        .card {
            border: 2px solid #aaa; /* Modifica a cor da borda */
        }

        /* Reduz o tamanho dos cards */
        .card-body {
            padding: 10px; /* Reduzindo o espaço interno */
        }

        .card-title {
            font-size: 18px; /* Reduzindo o tamanho do título */
        }

        .card-text {
            font-size: 14px; /* Reduzindo o tamanho do texto */
        }

        /* Estilo para o texto de erro */
        .text-danger {
            color: red;
            font-weight: bold;
        }

        /* Classe para centralizar texto */
        .centralizado {
            text-align: center;
        }

        /* Estilos responsivos */
        @media screen and (max-width: 768px) {
            .search-bar {
                position: relative;
                top: auto;
                right: auto;
                margin-bottom: 20px;
                text-align: center;
            }

            .search-bar input[type="text"] {
                width: calc(100% - 40px);
                padding-left: 40px;
            }

            .search-bar button {
                width: 40px;
                padding: 10px;
                background-color: transparent;
            }
        }
    </style>
</head>
<body class="pagina"> <!-- Adiciona a classe à tag body -->

<div class="container">
    <h1 class="titulo">Receitas</h1> <!-- Título centralizado -->
    <br>
    <!-- Barra de pesquisa -->
    <div class="search-bar">
        <form method="GET">
            <input type="text" name="search" placeholder="Pesquisar receita...">
            <button type="submit" class="btn btn-primary btn-rounded">Buscar</button> <!-- Botão de buscar -->
            <?php if (isset($_GET['search']) && !empty($_GET['search'])) { ?>
                <a href="." class="btn btn-primary btn-rounded">Voltar</a> <!-- Botão de voltar com o mesmo estilo redondinho -->
            <?php } ?>
        </form>
    </div>

    <!-- PHP para lidar com a pesquisa -->
    <?php
    // Array de receitas fictícias
    $receitas = array(
        array("title" => "Bolo de Chocolate", "image" => "img/bolo.jpg", "description" => "Um delicioso bolo de chocolate.", "link" => "detalhesbolo.php"),
        array("title" => "Sopa de Legumes", "image" => "img/sopa.jpg", "description" => "Uma reconfortante sopa de legumes.", "link" => "detalhesopa.php"),
        array("title" => "Salada de Frutas", "image" => "img/Salada.jpg", "description" => "Uma refrescante salada de frutas.", "link" => "detalhesalada.php"),
        array("title" => "Coxinha de Frango", "image" => "img/coxinha.jpg", "description" => "Uma deliciosa coxinha de frango.", "link" => "detalhescoxinha.php"),
        array("title" => "Strogonoff de Frango", "image" => "img/Strogonoff.jpg", "description" => "Uma ótima refeição para seu almoço", "link" => "detalhestrogonoff.php"),
        array("title" => "Salada Caesar com Ovos", "image" => "img/Saladac.jpg", "description" => "Uma maneira diferente de comer salada.", "link" => "detalhesaladac.php")
    );

    // Verifica se a pesquisa foi realizada
    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $search_term = $_GET['search'];
        $found = false;
        
        // Loop pelas receitas para verificar se a pesquisa corresponde a alguma receita
        foreach ($receitas as $receita) {
            if (stripos($receita['title'], $search_term) !== false) {
                echo '
                <div class="card mb-3 shadow-sm">
                    <img src="' . $receita['image'] . '" class="card-img-top" alt="' . $receita['title'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $receita['title'] . '</h5>
                        <p class="card-text">' . $receita['description'] . '</p>
                        <a href="' . $receita['link'] . '" class="btn btn-primary btn-rounded">Ver Receita</a>
                    </div>
                </div>';
                $found = true;
            }
        }
        
        // Se a receita não for encontrada, exibir mensagem
        if (!$found) {
            echo '<p class="text-danger centralizado"><strong>Ooops! Não possuímos essa receita ainda.</strong></p>';
        }
    } else {
        // Se não houver pesquisa, exibir todas as receitas
        echo '<div class="row">';
        foreach ($receitas as $receita) {
            echo '
            <div class="col-md-4"> <!-- Reduzindo o tamanho da coluna -->
                <div class="card mb-3 shadow-sm">
                    <img src="' . $receita['image'] . '" class="card-img-top" alt="' . $receita['title'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $receita['title'] . '</h5>
                        <p class="card-text">' . $receita['description'] . '</p>
                        <a href="' . $receita['link'] . '" class="btn btn-primary btn-rounded">Ver Receita</a>
                    </div>
                </div>
            </div>';
        }
        echo '</div>'; // Fecha a div row
    }
    ?>
</div>
<br>
<br>
<!-- Link de contato -->
<div class="contato-link">
    <a href="contato.php">Fale Conosco</a>
</div>

</body>
</html>
