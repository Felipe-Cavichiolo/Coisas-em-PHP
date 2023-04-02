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
        <h1>Resultados</h1>
    </header>
    <main>
        <?php
        $dadosquant = $_GET["dadosquant"];
        $lado = $_GET["lado"];
        for ($n = 0; $n < $dadosquant; $n++) {
            $rng[$n] = random_int(1, $lado);
        };
        echo "<p>O resultado é " . array_sum($rng) . "</p>";
        echo "<p>Os dados rolados foram: ";
        foreach ($rng as $value) {
            echo $value . " ";
        }
        echo "</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Página Anterior</a></p>
    </main>
</body>

</html>