<!--
    Desafio: Faça uma página que exiba a hora e a frase “Bom dia”, “Boa tarde” ou “Boa
    noite”, de acordo com a hora. Use a condicional if e a função date().

    Faça com que o calendário exiba o dia atual em negrito, usando a função
    date() .

    Exiba os domingos em vermelho e os sábados em negrito.

    Faça o calendário começar em um dia que não seja um domingo.

    E um calendário do ano todo? Será que é muito complexo?
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio 01</title>
</head>
<body>
    <?php
        function retornaMsg($hora){
            $msg = "";
            if(($hora >= 0) && ($hora < 5)){
                $msg = "Boa madrugada!";
            }elseif(($hora >= 5) && ($hora < 11)){
                $msg = "Bom dia!"; 
            }elseif(($hora >= 11) && ($hora < 18)){
                $msg = "Boa tarde!";
            }else{
                $msg = "Boa noite!";
            }
            return $msg;
        }
    ?>
    <?php echo "".retornaMsg(date('H'));?>
    
    <br><br>

    <?php
        function linha($semana){
            echo "<tr>";
            for($i = 0;$i <= 6;$i++){
                if(isset($semana[$i])){
                    if($semana[$i] == date('d')){
                        echo "<td align=center><strong>$semana[$i]</strong></td>";
                    }elseif($semana[$i] == $semana[0]){
                        echo "<td bgcolor=red align=center>$semana[$i]</td>";
                    }elseif((count($semana) == 7) && $semana[$i] == $semana[6]){
                        echo "<td align=center><strong>$semana[$i]</strong></td>";
                    }else{
                        echo "<td align=center>$semana[$i]</td>";
                    }
                }
            }
            echo "</tr>";
        }
        function calendario(){
            $dia = 1;
            $semana = array();
            while($dia <= 31){
                array_push($semana, $dia);
                if(count($semana) == 7){
                    linha($semana);
                    $semana = array();
                }
                $dia++;
            }
            linha($semana);
        }
    ?>
    <table border="1">
        <tr>
            <td>Dom</td>
            <td>Seg</td>
            <td>Ter</td>
            <td>Qua</td>
            <td>Qui</td>
            <td>Sex</td>
            <td>Sáb</td>
            <?php echo calendario(); ?>
        </tr>
    </table>
</body>
</html>