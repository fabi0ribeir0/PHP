<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css\estilo.css"/>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1+$n2;



        echo "A soma entre $n1 e $n2 é $s";
        echo "<br> O modulo entre ".$n1. " e ". $n2. " é ". ($n1%$n2);
    ?>
</div>
</body>
</html>