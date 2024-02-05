<?php
    $dbHost = '127.0.0.1';
    $dbUsername = 'suporte';
    $dbPassword = "";
    $dbName = 'TrabalhoWeb';
    $port = 3306; // ou a porta que você configurou no XAMPP


    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName, $port);
    
    if ($conexao->connect_errno) {
        echo "Erro de conexão: " . $conexao->connect_error;
    } else {
        //echo "Conexão efetuada com sucesso";
    }

?>
