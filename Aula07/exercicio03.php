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
        $ano = $_GET["an"];
        $idade = date("Y") - $ano;
        
        $vota = " O fulano completa $idade anos de idade este ano e ". ($idade >= 18 && $idade < 65 ? "é obrigado Votar" : ($idade < 16 ? "Não pode Votar": "não é obrigado a votar"));

        echo $vota;    
    ?>
</div>    
</body>
</html>