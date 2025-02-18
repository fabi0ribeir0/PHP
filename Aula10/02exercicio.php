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
        $d = $_GET["ds"];

        switch($d){
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Esse é um dia normal e vc tem aula";
                break;
            
            case 6:
            case 7:
                echo "Esse é um final de semana. VIVA SEM ESCOLA!";
        }


    ?>    
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>    
</body>
</html>