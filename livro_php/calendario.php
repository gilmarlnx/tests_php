<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendario</title>
</head>
<body>
    <?php
        function linha($semana){
            echo "<tr><tr>";
            for($i = 0;$i <= 6;$i++){
                if(isset($semana[$i])){
                    echo "<td>$semana[$i]</td>";
                }
            }
            echo "<tr><tr>";
        }

        function calendario(){
            $dia = 1;
            $semana = array();

            while ($dia <= 31){
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
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sáb</th>
        </tr>
        <?php calendario();?>
    </table>
</body>
</html>