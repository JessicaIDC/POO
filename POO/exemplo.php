<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Poo</title>
    <style>
        body{
            background: bisque;

        }
        p{
            text-decoration: aliceblue;
            font-family: "Arial";
            font-size: larger;
            text-shadow: aqua;
        }
    </style>

</head>
<body>
<?php
    require_once "Canetinha.php";
    $cn = new Canetinha();
    $cn-> cor="Amarelo";
    $cn-> ponta=0.7;
    $cn-> tipo="gel";
    $cn-> tampada= true;
    $cn->destampa();

    $cn->escrever();

    echo "</br>";


    $cn2 = new Canetinha();
    $cn2->cor="Verde";
    $cn2->ponta=0.9;
    $cn2->tipo= "esferográfica";
    $cn2->tampada=false;

    $cn2->tampar();

    $cn2->escrever();
    ?>

</body>
</html>