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
            $alunos = array("Amanda" , "Beatrix" , "Carlos");

            $alunos[] = "Diego"; // inclui elemnto no final do array
            array_push($alunos, "Marry");// Inclui elemento no final do array
            echo "<p> O Array tem ". count($alunos). " Elementos <br>";
            
            array_shift($alunos);// Exclui o primeiro elemento
            print_r($alunos);

            array_unshift($alunos, "Aline");// Incluir elemento no inicio
            array_pop($alunos); // Desaloca ultimo elemento do array
            echo "<p>";
            print_r($alunos);
        
        ?>
    </pre>    
    <!-- <p><a href="exercicio01.html">Voltar</a></p> -->
</div>    
</body>
</html>