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
        $o = $_GET["x"];
        $a = 10;
        $b = 5;

        $c = $o == "*" ? $a * $b : $a + $b ;

        echo $c


    ?>
</div>    
</body>
</html>