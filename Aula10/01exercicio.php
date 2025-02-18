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
        $n = !empty($_GET["num"]) ? $_GET["num"] : 0;
        $op = $_GET["oper"];
        $dobro = $n * 2;
        $cubo = $n ** 3;
        $raiz = sqrt("$n");

        switch($op){
            case 2: 
                echo "O dobro de $n é $dobro";
                break;
            
            case 3:
                echo "O cubo de $n é $cubo";
                break;

            case 4:
                echo "A raiz quadrada de $n é $raiz";

        }

    ?>    
    <p><a href="exercicio01.html">Voltar</a></p>
</div>    
</body>
</html>