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
        $x[0] = 4; 
        $x[1] = 3;
        $x[2] = 8;

        print_r($x); 
        echo "<p>";

        foreach ($x as $variavelQualquer) { // primeiro a array depois uma variavel onde armazena cada indice da array 
            echo "Valores: $variavelQualquer<br>";
        }

        // para criar array sem definir a quantidade de indices 
        $v = array (3,7,6,2,1,9); // dessa forma variavel v tera 6 elementos ( $v[5] )

        foreach($v as $show){
            if($show > 5){ // condição para mostrar apenas numeros maiores que 5 
                echo "<p> $show </p>";
            }
        }

        echo "<p>";

        var_dump($x);

        echo "<p>";

        var_export($v);

    ?>     
      
    <!--    
    -->
</div>    
</body>
</html>