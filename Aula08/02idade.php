<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
        $an = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
        $idade = date("Y") - $an;
        
        echo "$nome nasceu em $an é $sexo e tem $idade anos";        
    ?>
    <a href="exercicio02.html">Voltar</a>    
</div>
</body>
</html>
 