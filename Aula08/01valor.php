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
        $valor = $_GET["v"];
        $raiz = sqrt($valor);

        echo "Valor enviado foi $valor";
        echo "<br> A raiz quadrada de $valor é $raiz";
    ?>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>
 