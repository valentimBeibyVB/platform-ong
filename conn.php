<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'remar';

    $conexao = @mysqli_connect($host,$user,$password,$db);

        if(!$conexao){
            echo "Erro na conexão";
        }
?>