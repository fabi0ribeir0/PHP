<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
        $tam = $_GET["tam"];
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'> $txt </span>";
    ?>
</div>
</body>
</html>