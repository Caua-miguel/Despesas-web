<?php 

    $host = 'localhost';
    $user = 'postgres';
    $password = '';
    $bd_name = 'comercio';
    $port = '5432'; // Porta padrão do PostgreSQL

    $conexao_string = "host=$host dbname=$bd_name user=$user password=$password port=$port";
    $conexao = pg_connect($conexao_string);

    if(!$conexao){
        die("Conexão falhou: " . pg_last_error());
    }
?>