<?php
function calcDiasMesAno($anos, $dia, $mes)
{

    $dias = $anos * 365 + $mes * 30 + $dia;
    $meses = $anos * 12 + $mes;

    return array($dias, $meses);
}
$anos = 10;
$mes = 2;
$dia = 5;

$result = calcDiasMesAno($anos, $dia, $mes);
$dias = $result[0];
$meses = $result[1];

echo "$anos anos são:\n$dias dias\nou\n$meses meses.";
