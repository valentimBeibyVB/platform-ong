<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'doaki';

    $conexao = @mysqli_connect($host,$user,$password,$db);

        if(!$conexao){
            echo "Erro na conexão";
        }
?>