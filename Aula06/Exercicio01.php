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
        $bermuda = 49.90;
        $regata = 49.90;
        $tenis = 1020.00;
        $total = $bermuda + $regata + $tenis;
        $desconto = .10;
        $valor = $total - ($total*$desconto);
        
        echo "Bermuda = R$". number_format($bermuda, 2, ',','.'). "<br> Regata = R$". number_format($regata, 2, ',','.'). "<br> Tenis = R$". number_format($tenis, 2,',','.') ."<br> Valor total de R$". number_format($total, 2,',','.')." <br> Valor a pagar será de R$". number_format($valor,2,',','.')." (Desconto de 10%)";
    ?>
</div>
</body>
</html>