<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css"/>    
</head>
<body>
<div>
    <?php
        $a = $_GET["x"];
        $b = $_GET["y"];
        $maior = $a > $b    ?   $a       :  $b; //Operador ternario
             // Extressão ? verdadeiro : falso

        // se $a MAIOR q $b  $maior recebe $a  Se não $maior recebe $b
        echo $maior;

        $r = $a > $b ? $a+$b : $a - $b;
        // Se $a MAIOR q $b então $r recebe $a + $b Se não $r recebe $a - $b

        echo "<br> $r"
    ?>
</div>    
</body>
</html>