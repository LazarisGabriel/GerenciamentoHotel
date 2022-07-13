<?php

try{
    $connection_string = 'host=localhost port=5432 dbname=PIN user=postgres password=123fsdfdsfds4';
    $conn = pg_connect($connection_string);
        echo 'Conexão realizada';

}catch(PDOException $e){
    die('Falha na conexao: ' . $e->getMessage());
}

?>