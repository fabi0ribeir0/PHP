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
    <form method="get" action="02exercicio.php">
        
        <label for="n">Número:</label>
        <select name="n" id="n">
            <?php
                for($c = 1; $c<=10; $c++){
                    print "<option value='$c'>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</div>   
</body>
</html>