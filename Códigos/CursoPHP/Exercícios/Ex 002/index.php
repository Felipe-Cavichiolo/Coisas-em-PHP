<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplos PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("D / d / M / Y");
        echo " A hora atual é " . date("G : i : s ")
    ?>
</body>
</html>