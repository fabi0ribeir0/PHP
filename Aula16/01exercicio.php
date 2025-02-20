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
        $prod = "leite";
        $preco = 4.5;

        // %s mostra uma string ( no caso leite )
        // %f mostra um numero float ( no caso 4.5) para formatar com 2 casas decimais usase .2 antes do f (%.2f)
        printf("O %s está custando R$ %.2f", $prod, $preco);
    ?>    
    <!-- 
        %d - Valor decimal (positivo ou negativo)
        %u - Valor decimal sem sinal (apenas positivos)
        %f - Valor real
        %s - String
    -->
</div>    
</body>
</html>