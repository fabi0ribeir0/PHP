<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes Aritimeticas</title>
    <link rel="stylesheet" href="_css\estilo.css"/>
    <style>
        h2 {
            font: 20pt Arial Black;
            color: rgb(34, 11, 238);
            text-shadow: 3px 3px 2px Grey;
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2> Valores recebidos: $v1 e $v2 <h2/>";
    ?>
</div>
</body>
</html>