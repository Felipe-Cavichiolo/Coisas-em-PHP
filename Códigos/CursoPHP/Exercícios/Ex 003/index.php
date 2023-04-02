<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        //0x = Hexadecimal 0b = Binário 0 = Octal
        //$numero = 300;
        //echo "O valor de numero é $numero";
        //$variavel = 300;
        //var_dump($variavel);
        $numero = (integer) 3e2; //3 x 10 ^ 2
        echo " é o valor" . var_dump($numero);
    ?>
</body>
</html>