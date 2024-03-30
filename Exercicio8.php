<?php

function fibonacci($numero)
{

    $fibonacci = [0, 1];

    for ($i = 2; $i <= $numero; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$resultado = fibonacci(0);
var_dump($resultado);
