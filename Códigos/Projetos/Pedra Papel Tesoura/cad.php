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
        <h1>Resultado:</h1>
    </header>
    <main>
        <?php
        $escolha_player = $_POST["escolha"];
        $escolha_maquina = random_int(1, 3);
        switch ($escolha_maquina) {
            case 1:
                $escolha_maquina = "pedra";
                break;
            case 2:
                $escolha_maquina = "papel";
                break;
            case 3:
                $escolha_maquina = "tesoura";
                break;
        };
        $winner_dict = array("pedra" => "tesoura", "papel" => "pedra", "tesoura" => "papel");
        if ($escolha_player == $escolha_maquina) {
            echo "<p>Empate, sua jogada: $escolha_player, jogada da máquina: $escolha_maquina</p>";
        } elseif ($escolha_maquina == $winner_dict[$escolha_player]) {
            echo "<p>Vitória! Sua jogada: $escolha_player, jogada da máquina: $escolha_maquina</p>";
        } else {
            echo "<p>Derrota! Sua jogada: $escolha_player, jogada da máquina: $escolha_maquina</p>";
        }
        ?>
    </main>
</body>

</html>