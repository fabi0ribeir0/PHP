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
        $nome = "Fabio Ribeiro";
        $minNome = "fabio ribeiro de lima";
        $frase = "Estou na dedima setima aula";
        $pos = strpos($frase, "setima");
        $sub = substr($minNome, 0 ,3);
        $pad = str_pad($nome, 30, "#", STR_PAD_RIGHT);
        $replace = str_replace("bio", "ca" , $nome);
        print("Seu nome é ". strtolower($nome));
        echo "<p>". ucwords($minNome);
        echo "<p>". strtolower(strrev($nome));
        echo "<p> $pos";
        echo "<p> $sub";
        echo "<p>";
        print(" EU $pad AQUI");
        echo "<p> $replace";


    ?>    
    <!-- 
        strtolower - muda os caracteres para minusculas
        strtoupper - muda os caracteres para maiusculas
        ucfirst - Muda a primeira letra para maiuscula
        ucwords - altera a primeira letra de cada palavra para maiusculas
        strrev - inverte a ordem das letras
        strpos - Mostra a posição da palavra escolhida no parametro
        stripos - Faz o mesmo mas ignora maiusculas e minusculas
        substr_count - conta quantas vezes a palavra escolhida no parametro é encontrada na string
        substr - mostra x(3 no exemplo) letras apartir de y indice (0 no exemplo) cada letra é 1 indice
        str_pad - Adiciona caracteres a esquerda direita ou centro para a string caber na quantidade citada
        str_repeat - Repete x veses a string 
        str_replace - subistitui uma palavra por outra (veja o exemplo) - pode ser uma parte da frase
        str_ireplace - mema coisa ignorando maiusculas e minusculas
    -->
</div>    
</body>
</html>