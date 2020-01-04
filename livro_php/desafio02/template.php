<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Tarefas</title>
    <style>
        fieldset#camada1 {
            text-align: center;
            /*background-color: black;*/
            width: 20%;
        }

        label#especial {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form method="get" action="tarefas.php">
        <fieldset id="camada1">
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:<br>
                <input type="text" name="nome">
            </label>
            <br><br>
            
            <label>
                Descrição (Opcional):<br>
                <textarea name="descricao"></textarea>
            </label>
            <br><br>
            <label>
                Prazo (Opcional):<br>
                <input type="date" name="prazo">
            </label>
            <br><br>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" value="1" checked>
                    Baixa
                </label>

                <label>
                    <input type="radio" name="prioridade" value="2">
                    Média
                </label>
                
                <label>
                    <input type="radio" name="prioridade" value="3">
                    Alta
                </label>
            </fieldset>
            <br><br>
            <label id="especial">
                Tarefa concluída
                <input type="checkbox" name="concluida" value="1">
            </label>
            <br><br>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluida</th>
        </tr>
        <?php foreach($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?php echo $tarefa['nome']?></td>
            <td><?php echo $tarefa['descricao']?></td>
            <td><?php echo traduz_data_para_exibir($tarefa['prazo'])?></td>
            <td><?php echo traduz_prioridade($tarefa['prioridade']);?></td>
            <td><?php echo traduz_concluida($tarefa['concluida'])?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>