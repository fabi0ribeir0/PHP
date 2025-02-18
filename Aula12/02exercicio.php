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
        $v = $_GET["val"];
        $c = $v;
        $f = 1;
        do{

            $f = $f*$c;
            $c--;
        }while($c>=1);

        echo "$f";

    ?> 
    
      
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>    
</body>
</html>