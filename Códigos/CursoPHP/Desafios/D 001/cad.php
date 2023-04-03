<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Os Resultados são:</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "Erro";
            $sucessor = $numero + 1;
            $antecessor = $numero - 1;
            echo "<p>O sucessor de $numero é: $sucessor<br>O antecessor é: $antecessor</p>";
        ?>
    </main>
</body>
</html>