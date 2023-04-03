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
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $reais = $_POST["qntddinheiro"];
            $cotacao = 5.06;
            $dolares = $reais / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $reais, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong><br><br><strong>Cotação fixa de R$5.06</strong>";
        ?>
    </main>
</body>
</html>