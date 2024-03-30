<?php
function procElem($elemento, $array)
{
    foreach ($array as $indice => $valor) {
        if ($valor == $elemento) {
            return $indice;
        }
    }
    return false;
}

$array = ["arroz", "batata", "feijao"];
$elementoBuscado = "arroz";
$indice = procElem($elementoBuscado, $array);

if ($indice != false) {
    echo "O elemento $elementoBuscado foi encontrado no indice $indice.";
} else {
    echo "O elemento $elementoBuscado nao foi encontrado.";
}
