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
        $atual = $_GET["a"];
        $passado = --$atual;
        echo $passado
       
    ?>
</div>
</body>
</html>