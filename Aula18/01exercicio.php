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
    <pre>
        <?php
            $n = array (3,5,8,2);
            $n[] = 7;
            print_r($n);

            $c = range(5,20,5); // Indice 0 recebe 5 - até 20 - passo 5

            print_r($c); // mostra 0=>5  1=>10   2=>15  3=>20
        ?>
    </pre>   
    <!-- <p><a href="exercicio01.html">Voltar</a></p> -->
</div>    
</body>
</html>