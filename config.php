<?php 
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'fomularioCineHome';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    
    /*if ($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "successful connection";
    }*/
?>