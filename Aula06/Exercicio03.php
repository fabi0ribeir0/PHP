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
        $a = 3;
        $b = &$a; 
        // o simbulo & antes da variavel faz com que ela seja uma referencia a outra variavel
        $b += 5;
        echo "$a & $b" // com & o resultado é a=8 e b=8 sem o & a=3 e b=8
    ?>
</div>    
</body>
</html>