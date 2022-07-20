<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Gerenciamento de Hotel</title>

        <link rel="stylesheet" type="text/css" href="css/estilo_index.css">
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
        <![endif]-->

    </head>
    <body>

        <div id="container">

            <header>
                <h1>Gerenciamento de Hotel</h1>
            </header>

            <div id="formularioLogin"> <!-- INICIO FORMULARIO -->

                <div>
                    <h2>Login</h2>
                </div>
                <form action="login.php" method="POST">
                    
                    <label for="email">E-mail</label>
                    <br>
                    <input class="campoForm" type="email" name="email">

                    <br>

                    <label for="senha">Senha</label>
                    <br>
                    <input class="campoForm" type="password" name="senha">
                    <button class="botao" type="submit">Fazer Login</button>

                </form>

                <p class="text-center text-danger">

                    <?php 
                        if (isset($_SESSION['email'])){
                            echo $_SESSION['loginErro'];
                            unset($_SESSION['loginErro']);
                        }
                    ?>

                </p>

                <button class="botao esqueceu" type="submit" >Esqueceu a senha?</button>
                
            </div> <!-- FIM FORMULARIO -->
            

        </div>
        
    </body>
</html>