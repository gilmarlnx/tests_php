<?php

    $bdServidor = '';
    $bdUsuario = '';
    $bdSenha = '';
    $dbBanco = '';

    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $dbBanco);

    if(mysqli_connect_errno($conexao)){
        echo "Problemas ao conectar ao Banco. Verifique os dados!";
        die();
    }

    function gravar_tarefa($conexao, $tarefa){
        $sqlGravar = "
        INSERT INTO tarefas
        (nome, descricao, prazo, prioridade, concluida)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prazo']}',
            {$tarefa['prioridade']},
            {$tarefa['concluida']}
        )";

        mysqli_query($conexao, $sqlGravar);
    }

    function busca_tarefa($conexao){
        $sqlBusca = 'SELECT * FROM tarefas';
        $resultado = mysqli_query($conexao, $sqlBusca);

        $tarefas = array();

        while ($tarefa = mysqli_fetch_assoc($resultado)){
            $tarefas[] = $tarefa;
        }

        return $tarefas;
    }
