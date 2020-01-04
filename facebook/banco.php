<?php

    $dbHost = '';
    $dbUser = '';
    $dbPass = '';
    $dbName = '';

    $conexao = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if(mysqli_connect_errno($conexao)){
        echo "Verifique seus dados!";
    }

    function gravarDados($conexao, $dados){
        $sqlGravar = "
        INSERT INTO dados
        (email, senha)
        VALUES
        (
            '{$dados['email']}',
            '{$dados['senha']}'
        )
        ";

        mysqli_query($conexao, $sqlGravar);
    }
