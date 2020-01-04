<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Contatos</title>
    <style>
        fieldset {
            text-align: center;
            width: 20%;
        }
        .textarea {
            width: 90%;
        }
        table {
            margin-top: -30%;
        }
    </style>
</head>
<body>
    <form>
        <fieldset>
            <legend>Novo Contato</legend>
            <label>
                Nome:<br>
                <input type="text" name="nome" class="textarea">
            </label><br><br>
            
            <label>
                Telefone:<br>
                <input type="tel" name="telefone" class="textarea">
            </label><br><br>
            
            <label>
                E-mail:<br>
                <input type="email" name="email" class="textarea">
            </label><br><br>
            
            <label>
                Descrição:<br>
                <textarea name="descricao" class="textarea"></textarea>
            </label><br><br>
            
            <label>
                Data de Nascimento:<br>
                <input type="date" name="data">
            </label><br><br>

            <label>
                <input type="checkbox" name="favorito" value="Sim" checked>
                Contato Favorito
            </label><br><br>

            <input type="submit" value="Cadastrar" name="cadastra">
            <input type="reset" value="Resetar" name="reseta">
        </fieldset>
    </form>
    <table border="1" align="right" width="77%">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Descrição</th>
            <th>Nascimento</th>
            <th>Favorito</th>
        </tr>
        <?php foreach($lista_contatos as $contato) : ?>
        <tr>
            <td><?php echo $contato['nome']; ?></td>
            <td><?php echo $contato['telefone']; ?></td>
            <td><?php echo $contato['email']; ?></td>
            <td><?php echo $contato['descricao']; ?></td>
            <td><?php echo $contato['data']; ?></td>
            <td><?php echo $contato['favorito']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>