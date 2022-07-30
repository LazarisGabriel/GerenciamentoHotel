<?php

    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION["offset"]);
    unset($_SESSION["offsetHospedes"]);
    header('Location: index.php');
?>