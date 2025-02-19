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
        function teste ($x){ // Passagem por valor
            $x += 2;
            echo "O valor de X é $x <br>";
        }

        $a = 3;

        teste($a);

        print "O valor de A é $a"; 
    ?>    
    <!-- <p><a href="exercicio01.html">Voltar</a></p> -->
</div>    
</body>
</html>