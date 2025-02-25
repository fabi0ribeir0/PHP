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
            $c = array("nome"=>"Ana", "idade"=>25, "peso"=>75.9);
            print_r($c);
            echo "<p>";

            foreach($c as $campo => $valor){
                echo "$campo $valor <br>";
            }

        ?>
    </pre>
    <p><a class="cm" href="javascript:history.go(-1)">Voltar</a> </p>
    
</div>    
</body>
</html>