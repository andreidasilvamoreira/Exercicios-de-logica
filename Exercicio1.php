<?php

function NumPrimo($numero)
{
    //isso é pra identificar se é menor que 1. q numeros primos nao tem abaixo dele.
    if ($numero <= 1) {
        return false;
    }
    //aqui é enquanto $i for menor igual a raiz do numero q for colocar, repete o loop e adicione mais um.
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}
$numero = 997;
// a funcao NumPrimo voltar true escreva é um numero primo. se nao...
if (NumPrimo($numero)) {
    echo "é um numero primo";
} else {
    echo "nao é um numero primo";
}
//coloque um numero aqui pra identificar se é ou nao é primo.