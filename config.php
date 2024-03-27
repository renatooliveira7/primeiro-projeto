<?php

    $dbHost = 'Localhost';
    $dnUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-cr7';

    $conexao = new mysqli($dbHost,$dnUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else 
    {
        echo "";
    }

?>