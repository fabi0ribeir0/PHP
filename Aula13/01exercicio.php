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
        for($i=1; $i<=10; $i++){
            echo "[$i] ";
        }
        echo "<p>";

        for($i=10; $i>=1; $i--){
            echo "[$i] ";
        }
        echo "<p>";

        for($i = 0; $i <= 100; $i+=9){
            echo "[$i] ";
        }

    ?>    
    <!-- <p><a href="exercicio01.html">Voltar</a></p> -->
</div>    
</body>
</html>