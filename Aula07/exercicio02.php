<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
        $aline = 8;
        $bill = 3.5;
        $carlos = 2.0;

        $ma = $aline >= 6 ? "Aprovada" : "Em recuperação";
        $ma = $aline < 3 ? "Reprovada" : $ma;
        $mb = $bill >= 6 ? "Aprovado" : "Em recuperação";
        $mb = $bill < 3 ? "Reprovado" : $mb;
        $mc = $carlos >= 6 ? "Aprovado" : "Em recuperação";
        $mc = $carlos < 3 ? "Reprovado" : $mc;
        $mediaAlunos = ($aline + $bill + $carlos) / 3;

        echo "Aluna Aline nota $aline, está $ma";
        echo "<br>Aluno Bill nota $bill, está $mb";
        echo "<br> Aluno Carlos nota $carlos, está $mc<br>";
        echo "<br> A médias desses alunos é $mediaAlunos";


    ?>
</div>    
</body>
</html>