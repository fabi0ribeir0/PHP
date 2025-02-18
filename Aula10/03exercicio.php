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
        $rn = "Região Norte";
        $rnd = "Região Nordeste";
        $co = "Região Centro-Oeste";
        $rsd = "Região Suldeste";
        $rs = "Região Sul";        

        $op = $_GET["estados"];
        
        switch($op){
            case 16: case 21: case 24:
                $om = $rs;
                break;
            case 8: case 13: case 19: case 25:
                $om = $rsd;
                break;
            case 7: case 9: case 11: case 12:
                $om = $co;
                break;
            case 1: case 3: case 4: case 14: case 22: case 23: case 27:
                $om = $rn;
                break;
            default:
                $om = $rnd;
        }

        echo $om;
    ?>    
    <p><a href="exercicio03.html">Voltar</a></p>
</div>    
</body>
</html>