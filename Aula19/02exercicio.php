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
            $n = array(5, 9, 1, 3);
            $l = array("d", "a", "c", "b");
            print_r($n);
            echo"<p>";
            print_r($l);

            sort($n); // ordena do menoar para o maior os elementos do array
            rsort($l);
            print_r($n);
            echo "<p>";
            print_r($l);// ordena do maior para o menor os elementos do array
            echo"<p>";
            asort($l);// Ordena de forma associativa (crescente), mantem os indices
            print_r($l);
            echo "<p>";
            arsort($n);// Ordena de forma associativa (decrescente), mantem os indices
            print_r($n)
            

            // ksort(array) - ordena os indices de forma crescente (mantem os elementos respectivos desses indices )
            
            
        ?>
    </pre>    
    <!--  
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    -->
</div>    
</body>
</html>