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
        $n = $_GET["n"];
        $m= 0;
        $vm = "";
        for($i=1; $i<=$n; $i++){
                       
            if($n % $i == 0 ){
                $vm = "$vm  $i ";
                $m++;
            }            
        }
        
        echo "<h2> Analisando Nº $$n ...</h2>";

        echo "<p> Valores múltiplos: $vm </p>";

        echo "<p> Total de multiplos: $m</p>";

        if($m == 2 ){
            echo "Resultado: O Nº $n <span class='foco'>É PRIMO!</span>";
        }else echo "Resultado: O Nº $n <span class='foco'>NÃO É PRIMO!</span>"
    ?>
    <p><a class="cm" href="javascript:history.go(-1)">Voltar</a> </p>
    
</div>    
</body>
</html>