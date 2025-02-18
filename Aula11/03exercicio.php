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
        $inicio = $_GET["in"];
        $final = $_GET["fn"];
        $incremento = $_GET["incremento"];

        if($inicio < $final){
            
            while($inicio <= $final){
                echo "[$inicio] ";
                $inicio += $incremento;
            }
        }else {
            while($final <= $inicio){
            echo "[$inicio] ";
            $inicio -= $incremento;
            }
        }        
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a> 
    
</div>    
</body>
</html>