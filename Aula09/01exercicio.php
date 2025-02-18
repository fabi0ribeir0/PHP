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
        $nome = !empty($_GET["n"]) ? $_GET["n"] : "Nome não informado";
        $ano = $_GET["a"];
        $idade = date("Y") - $ano;
        $votar = "não";
        $dirigir = "não";

        if($idade >= 18 && $idade < 65){
            //echo "$nome tem $idade anos é maior de idade e ja pode dirigir e votar";
            $votar = "já";
            $dirigir = "já";
        }//else echo "$nome tem $idade anos é menor de idade e não pode votar nem dirigir"         
        else{
            if($idade > 15 || $idade > 64){
                $votar = "não é obrigado, mas";
            }

            $dirigir = "não";
        }

        echo "$nome tem $idade anos $dirigir pode dirigir e $votar pode votar"
    ?>
    
    <p><a href="exercicio01.html">Voltar</a></p>
</div>    
</body>
</html>