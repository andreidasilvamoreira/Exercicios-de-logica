<?php
function lerTotaldeEleitores($quantosHabit, $votosBrancos, $votosValidos, $votosNulos)
{
    $porcentagemBranco = number_format(($votosBrancos / $quantosHabit) * 100, 1);
    $porcentagemValidos = number_format(($votosValidos / $quantosHabit) * 100, 1);
    $porcentagemNulos = number_format(($votosNulos / $quantosHabit) * 100, 1);
    return array($porcentagemBranco, $porcentagemNulos, $porcentagemValidos);
}

$quantosHabit = 19347;
$votosBrancos = 2000;
$votosValidos = 3000;
$votosNulos = 5000;
$result = lerTotaldeEleitores($quantosHabit, $votosBrancos, $votosValidos, $votosNulos);
$porcentagemBranco = $result[0];
$porcentagemValidos = $result[1];
$porcentagemNulos = $result[2];

echo "O percentual de votos da populacao de $quantosHabit habitantes foi de:\nVotos Branco foi de: $porcentagemBranco%\nvotos validos foi de: $porcentagemValidos%\nvotos nulos foi de: $porcentagemNulos%";
