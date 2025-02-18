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
        function soma ($a, $b){
            $s = $a + $b;
            return $s;            
        }
        $v1 = $_GET["v1"];
        $v2 = $_GET["v2"];

        $res = soma($v1,$v2);

        echo "Soma entre $v1 e $v2 é $res"


    ?>    
     <p><a href="exercicio01.html">Voltar</a></p>
</div>    
</body>
</html>