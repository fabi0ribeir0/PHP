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
            $n = range(10,50,5);

            foreach($n as $v){
                echo "<p>[ $v ]";
            }

            $v = array ( 1=>5,  5=>9,  7=>8,  23=>7);
            unset ($v[23]);
            echo "<p>";
            print_r($v);
        ?> 
    </pre>
      
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>    
</body>
</html>