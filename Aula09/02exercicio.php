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
        $n1 = !empty($_GET["n1"]) ? $_GET["n1"] : 0;
        $n2 = !empty($_GET["n2"]) ? $_GET["n2"] : 0;
        $m = ($n1 + $n2)/2;

        if($m >=7){
            $s = "APROVADO";
        }
        elseif($m >=4 && $m < 7){
            $s = "RECUPERAÇÃO";
        }
        else {$s = "REPROVADO";}

        echo " A média entre  e <strong class='st'>$n1</strong> e <strong class='st'>$n2</strong> é igual a <strong class='st'>$m</strong> <br>
        Situação do aluno: <strong class='st'>$s</strong> ";



    ?>
    <p><a href="exercicio02.html">Voltar</a></p>
</div>    
</body>
</html>