<?php
    session_start();
    
    $_SESSION["offset"] = 0;
    unset($_SESSION['where']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Novo Funcionário - Gerenciamento de Hotel</title>
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="estilo_novoFuncionario.css">
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
                    <a href="TelaPrincipal.php" class="active">
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
                    <a href="#">
                        <img src="img/carteira-de-identidade.png">
                        <span>Novo Funcionário</span>
                    </a>
                    <a href="logout.php" id="logout"> <!-- TEM QUE PASSAR ESSE CARA PRA BAIXO-->
                        <img src="img/logout.png">
                        <span>Sair</span>
                    </a>
                </div>
            </header> <!-- FIM CABECALHO -->

            <div id="formularioCadastra"> <!-- INICIO FORMULÁRIO -->

                <div>
                    <h2>Cadastrar Funcionário</h2>
                </div>
                <form action="cadastraFuncionario.php" method="POST">
                    
                    <label for="nome">Nome</label>
                    <br>
                    <input class="campoForm" type="text" name="nome">
                    
                    <br>
                    
                    <label for="sobrenome">Sobrenome</label>
                    <br>
                    <input class="campoForm" type="text" name="sobrenome">
                    
                    <br>
                    
                    <label for="cep">CEP</label>
                    <br>
                    <input class="campoForm" type="text" name="cep">
                    
                    <br>
                    
                    <label for="cpf">CPF</label>
                    <br>
                    <input class="campoForm" type="text" name="cpf">
                    
                    <br>
                    
                    <label for="email">E-mail</label>
                    <br>
                    <input class="campoForm" type="email" name="email">
                    
                    <br>
                    
                    <label for="dataNasc">Data de Nascimento: </label>
                    <br>
                    <input class="campoForm" type="date" name="dataNasc">
                    
                    <br>

                    <label for="genero">
                        <span>Gênero</span>
                        <br>
                        <input class="genero" type="radio" name="genero" value="1"> Masculino
                        <input class="genero" type="radio" name="genero" value="2"> Feminino
                        <input class="genero" type="radio" name="genero" value="3"> Não optar
                    </label>

                    <br>

                    <label for="senha">Senha</label>
                    <br>
                    <input class="campoForm" type="password" name="senha">
                    
                    <br>

                    <label for="confirmaSenha">Confirmar Senha</label>
                    <br>
                    <input class="campoForm" type="password" name="confirmaSenha">
                    <br>
                    <button class="botao" type="submit">Cadastrar Funcionário</button>

                </form>
                
                <button class="botao cancelar" onclick="voltaInicio()" >Cancelar</button>

                <script>
                    function voltaInicio() {
                        window.location.href = "TelaPrincipal.php";
                    }
                </script>

                <p class="text-center text-danger">
                
            </div> <!-- FIM FORMULÁRIO -->


        </div>
        
    </body>
</html>