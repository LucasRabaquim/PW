<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Data de Hoje: ".date("d/m/Y");
        echo "<br>";
        echo "Essa página foi processada às: ".date("H:i:s");
        echo "<hr>";
        echo "<hr>";

        $hora = date("H");
        $saudacao = "";

        if($hora>=0 && $hora<12){
            $saudacao = "Bom dia";
        }
        else if($hora>=12 && $hora<=18){
            $saudacao = "Boa Tarde";
        }
        else {
            $saudacao = "Boa noite";
        }
        echo $saudacao;
        /*
    day == dia
    month == mês
    year == ano
    hour == hora
    minutes == i
    seconds == s
        */

    ?>
</body>
</html>