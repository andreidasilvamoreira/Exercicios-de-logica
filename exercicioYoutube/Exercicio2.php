<?php
function calcDiasMesAno($anos, $dia, $mes)
{

    $dias = $anos * 365 + $mes * 30 + $dia;
    $meses = $anos * 12 + $mes;

    return array($dias, $meses);
}
$anos = 30;
$mes = 6;
$dia = 5;

$result = calcDiasMesAno($anos, $dia, $mes);
$dias = $result[0];
$meses = $result[1];

echo "voce ja viveu $dias dias";
