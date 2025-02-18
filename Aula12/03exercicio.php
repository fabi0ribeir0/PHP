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
        $c = 1;

        do{
            $r=$n*$c;

            echo "$n X $c = $r <br>";

            $c++;
        }while($c<=10);
        
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a> 
    
</div>    
</body>
</html>