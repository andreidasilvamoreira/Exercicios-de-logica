<?php
function SalarioVendedor($salarioFixo, $CarrosVendidos, $comissaoPorCarro)
{

    $comissao = $comissaoPorCarro * $CarrosVendidos;
    $salario = $comissao + $salarioFixo;
    $vendasEfetuadas = ($salario * 5) / 100;
    $salario = $salario + $vendasEfetuadas;
    return array($vendasEfetuadas, $comissao, $salario);
}

$salarioFixo = 1000;
$CarrosVendidos = 10;
$comissaoPorCarro = 100;
$resultado = SalarioVendedor($salarioFixo, $CarrosVendidos, $comissaoPorCarro);
$vendasEfetuadas = $resultado[0];
$comissao = $resultado[1];
$salario = $resultado[2];

echo "o valor do salario fixo é: $salarioFixo\nQuantos carros foram vendidos: $CarrosVendidos\na comissao por carro é $comissaoPorCarro\no salario é de: $salario";
