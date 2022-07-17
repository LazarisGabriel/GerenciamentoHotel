<?php
    session_start();
    
    include("conexao.php");

    $sql = "SELECT A.NOME, 
                   A.QUANTIDADE, 
                   B.NUMERO
               FROM ESTOQUE A
               INNER JOIN QUARTO B ON B.HANDLE = A.QUARTO 
               ORDER BY B.HANDLE ASC
               LIMIT 16";

    $result = pg_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' name="viewport">
        <title>Estoque - Gerenciamento de Hotel</title>
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="estilo_estoque.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                    <a href="#">
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

            <div id="pesquisa"> <!-- INICIO PESQUISA -->

                <label for="nome">Pesquisar: </label>
                <input class="nome" type="text" name="nome">

                <button class="botaoPesquisa">Buscar</button>
                <button class="botaoAdiciona">Adicionar +</button>

            </div> <!-- FIM PESQUISA -->

            <div id="listagemEstoque"> <!-- INICIO LISTA -->

            <table class="table">
                <thead>
                    <tr>
                        <th class="nome" scope="col">Nome</th>
                        <th class="numero" scope="col">Quarto</th>
                        <th class="quantidade" scope="col">Quantidade</th>
                        <th class="solicitarReposicao" scope="col">Alterar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        while($user_data = pg_fetch_assoc($result)){
                            echo "<tr>";
                            echo "  <td class="."nome"."> " . $user_data['nome'] . "</td>";
                            echo "  <td class="."numero"."> " . $user_data['numero'] . "</td>";
                            echo "  <td class="."quantidade"."> " . $user_data['quantidade'] . "</td>";
                            echo "  <td class="."solicitarReposicao"."><button class="."reposicaoBotao".">Solicitar Reposição</button></td>";
                            echo "</tr>";
                        }
                    ?>

                </tbody>
            </table>

            </div> <!-- FIM LISTA -->

        </div>
        
    </body>
</html>