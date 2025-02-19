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
        include "Funcoes.php"; // estancia as funções dentro do arquivo

        echo "<h1>Testando novas funções!</h1>";

        ola(); //Função veio do arquivo Funcoes.php

        mostraValor(4);

        echo "<h2> Finalizando programa!</h2>"
    ?> 
    
      
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>    
</body>
</html>