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
        $txt = "Este é um exemplo de string gigante que vai mostrar a funcao do wordwrap";
        $res = wordwrap($txt, 5, "<br>\n" , true);
        echo $res;

        $tamanho = strlen($txt);

        echo "<p> $tamanho";

        $site = "Fabio Ribeiro de Lima";
        $nome = "   José da Silva   ";
        $novo = trim($nome);
        $qtdPalavras = str_word_count($txt,0);

        $vetor = explode(" " , $site);
        $split = str_split($site);

        echo "<p>$nome - Caracteres = ",strlen($nome);
        echo "<p> $novo - Caracteres = ", strlen($novo);
        echo "<p> A string txt tem $qtdPalavras palavras <br>";
        print_r($vetor);
        echo "<p>";
        print_r($split);

        $n1[0] = "Curso";
        $n1[1] = "em";
        $n1[2] = "Vídeo";

        $impl = implode(" ",$n1);

        echo "<p> $impl";

        $letra = chr(67);

        echo "<br> $letra";

        $l = "u";

        echo "<br>", ord($l);
        


    ?>
    <!--
        wordwrap - Quebra a string de acordo com os paremetros
        strlen - mostra a quantidade de caracteres (incluindo espaços)
        trim - Elimina os espaços no inicio e no final da string (mantem os do meio)
        ltrim - Elimina os espaços do inicio
        rtrim - Elimina os espaços do final
        str_word_count - Colocando paremetro 0 conta as palavras
        str_word_count - Colocando o parametro 1 cria um array da string (cada palavra 1 indice)
        str_word_count - Colocando o parametro 2 cria um array mantendo a posicionamento  de cada palavra
        explode - Pega cada palavra de string e coloca em um indice "Caractere de separação (no exemplo foi o espaço)" a string que será convertida em array
        str_split - Cria um vetor da string com cada letra sendo 1 indice (ignora espaços)
        implode - Transforma um vetor em uma stringo com a parametro escolhido (no exemplo foi espaço)
        join - funciona igual o implode
        chr - mostra qual letra é esse código (exemplo 67 = C) [da pra usar ALT Numero ]
        ord - faz o contrario da chr
    -->
    
</div>    
</body>
</html>