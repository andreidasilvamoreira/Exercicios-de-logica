<?php
function reajuste($reajuste, $salario)
{
    $total1 = ($salario * $reajuste) / 100;
    $total = $total1 + $salario;
    return $total;
}

$reajuste = 50;
$salario = 3000;

$resultado = reajuste($reajuste, $salario);
echo "o salario de $salario, com $reajuste% de desconto passa a ser de $resultado";
