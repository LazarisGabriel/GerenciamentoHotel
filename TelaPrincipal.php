<?php
    session_start();

    $_SESSION["offset"] = 0;
    unset($_SESSION['where']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Menu - Gerenciamento de Hotel</title>
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="estilo_telaPrincipal.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="container">

            <header> <!-- INICIO CABECALHO -->
                <input type="checkbox" id="check">
                <label for="check">
                    <img src="img/menu.png" id="btn">
                    <h1>Gerenciamento de Hotel</h1>
                    <i class="fas fa-times" id="cancel"></i>
                </label>
                <div class="sidebar">
                    <a href="#" class="active">
                        <img src="img/home.png">
                        <span>Tela Principal</span>
                    </a>
                    <a href="#">
                        <img src="img/calendario.png">
                        <span>Reservas</span>
                    </a>
                    <a href="Estoque.php">
                        <img src="img/estoque.png">
                        <span>Estoque</span>
                    </a>
                    <a href="NovoFuncionario.php">
                        <img src="img/carteira-de-identidade.png">
                        <span>Novo Funcionário</span>
                    </a>
                    <a href="logout.php" id="logout"> <!-- TEM QUE PASSAR ESSE CARA PRA BAIXO-->
                        <img src="img/logout.png">
                        <span>Sair</span>
                    </a>
                </div>
            </header> <!-- FIM CABECALHO -->

        </div>
        
    </body>
</html>