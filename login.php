<?php
session_start();
include("conexao.php");

if (isset($_POST['email']) && isset($_POST['senha'])){

    $sql = "SELECT * FROM PESSOA WHERE EMAIL ILIKE '". $_POST['email'] . "' AND SENHA ILIKE '" . $_POST['senha'] . "' LIMIT 1";
    $result = pg_query($conn, $sql);
    $resultado = pg_fetch_assoc($result);


    if(empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha não estão cadastrados no sistema";
        header('Location: index.php');
    } else {
        header('Location: TelaPrincipal.php');
    }
} else {

    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header('Location: index.php');
}

?>