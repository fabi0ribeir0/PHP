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
    $c=1;
        while($c <= 5){
           echo "Valor $c: <input type='number'name='v$c' /> <br>";
            $c++;
        }
    ?> 
      
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>    
</body>
</html>