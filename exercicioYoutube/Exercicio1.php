<?php
function calcularAreaRetangulo($altura, $base)
{

    $result = $base * $altura;
    return $result;
}
$altura = 10;
$base = 10;
$Area = calcularAreaRetangulo($altura, $base);
echo $Area;
