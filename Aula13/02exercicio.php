<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
        $n = $_GET["n"];

        for($i = 1; $i<=10; $i++){
            $r=$i*$n;
            echo "$n X $i = $r <br>";
        }
    ?> 
    
      
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>    
</body>
</html>