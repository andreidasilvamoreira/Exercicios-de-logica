<?php
function procurarElemento($elemento, $array)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $elemento) {
            return $i;
        }
    }
    return false;
}

$array = ["arroz", "batata", "feijao"];
$elementoBuscado = "arroz";
$indice = procurarElemento($elementoBuscado, $array);

if ($indice != false) {
    echo "O elemento $elementoBuscado foi encontrado no indice $indice.";
} else {
    echo "O elemento $elementoBuscado nao foi encontrado.";
}
