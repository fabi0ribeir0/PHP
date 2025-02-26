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

            $alunos[] = "Diego";
            echo "<p> O Array tem ". count($alunos). " Elementos <br>";

            print_r($alunos);
        ?>
    </pre>    
    <!-- <p><a href="exercicio01.html">Voltar</a></p> -->
</div>    
</body>
</html>