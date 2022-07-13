<?php
    session_start();
    include('conexao.php');


    if (isset($_POST['nome']) && 
        isset($_POST['sobrenome']) && 
        isset($_POST['cep']) && 
        isset($_POST['cpf']) && 
        isset($_POST['email']) && 
        isset($_POST['dataNasc']) && 
        isset($_POST['genero']) && 
        isset($_POST['senha'])){

            $sql = "INSERT INTO PESSOA (NOME, SENHA, EHCLIENTE, CEP, EMAIL, DATANASC, GENERO, CPF)
                                    VALUES ( '" . $_POST['nome'] . ' ' . $_POST['sobrenome'] . "', 
                                             '" . $_POST['senha'] . "',
                                                  FALSE,
                                             '" . $_POST['cep'] . "',
                                             '" . $_POST['email'] . "',
                                             '" . $_POST['dataNasc'] . "',
                                              " . $_POST['genero'] . ",
                                             '" . $_POST['cpf'] . "')";

            $result = pg_query($conn, $sql);
            $resultado = pg_fetch_assoc($result);

            
            if(empty($resultado)) {
                $_SESSION['loginErro'] = "Erro ao cadastrar o funcionário";
                header('Location: NovoFuncionario.php');
            } else {
                header('Location: TelaPrincipal.php');
            }

    } else {

        $_SESSION['loginErro'] = "Preencha todos os campos";
        header('Location: NovoFuncionario.php');
    }

?>