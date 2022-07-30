<?php
    session_start();
    
    include("conexao.php");

    $sql = "SELECT NOME
              FROM PESSOA A 
             WHERE EHCLIENTE = TRUE
             ORDER BY HANDLE ASC
             LIMIT 15
            OFFSET " . $_SESSION["offsetHospedes"];

    $result = pg_query($conn, $sql);

    $sqlcontador = "SELECT COUNT(1) CONTADOR
                      FROM PESSOA ";

    $resultContador = pg_query($conn, $sqlcontador);

    while($user_contador = pg_fetch_assoc($resultContador)) {
        $contador = $user_contador["contador"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' name="viewport">
        <title>Hóspedes - Gerenciamento de Hotel</title>
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/estilo_hospedes.css">
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
                        <img src="img/pessoas.png">
                        <span>Hóspedes</span>
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

            <div id="pesquisa"> <!-- INICIO PESQUISA -->

                <label for="nome">Pesquisar: </label>
                <input id="busca" class="nome" type="text" name="nome" value="">

                <button id="botaoBuscar" type="button" class="botaoPesquisa" onclick="pesquisar">Buscar</button>
                <button type="button" class="botaoAdiciona">Adicionar +</button>

            </div> <!-- FIM PESQUISA -->

            <div id="listagemHospedes"> <!-- INICIO LISTA -->

                <table class="table"> <!-- INICIO TABELA -->
                    <thead>
                        <tr>
                            <th class="nome" scope="col">Nome</th>
                            <th class="opcoes" scope="col" colspan="3">Opções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            while($user_data = pg_fetch_assoc($result)){
                                echo "<tr>";
                                echo "  <td class="."nome"."><img src=" . "img/user.png" . ">" . $user_data['nome'] . "</td>";
                                echo "  <td class="."conta"."><button class="."conta"."><img src=" . "img/maquina-de-cartao.png" . "></button></td>";
                                echo "  <td class="."editar"."><button class="."editar"."><img src=" . "img/brush.png" . "></button></td>";
                                echo "  <td style="."border-right:none"." class="."visualizar"."><button class="."visualizar"."><img src=" . "img/view.png" . "></button></td>";
                                echo "</tr>";
                            }
                        ?>

                    </tbody>
                </table> <!-- FIM TABELA -->


                <div class="rolagem">

                    <input type="button" id="botaoVolta" class="button" value="<" onclick="voltar()"></input>
                    
                    <span id="pagina"> <?php if ($_SESSION["offsetHospedes"] != 0) {echo $_SESSION["offsetHospedes"]/15 + 1;} else {echo $_SESSION["offsetHospedes"] + 1;} ?> </span>
                    
                    <input type="button" id="botaoAvanca" class="button" value=">" onclick="avancar()"></button>

                </div>

                <script type="text/javascript">

                    var avancar = function() {
                        
                        <?php
                            $_SESSION["offsetHospedes"] += 15;
                        ?>
                        
                        window.location.href = "Hospedes.php";
                    }

                    var voltar = function() {
                        <?php
                            //$_SESSION["offsetHospedes"] -= 15;
                        ?>

                        window.location.href = "Hospedes.php";
                    }

                    function pesquisar() {
                        window.location.href = "Hospedes.php";
                    }

                </script>

            </div> <!-- FIM LISTA -->

        </div>
        
    </body>
</html>