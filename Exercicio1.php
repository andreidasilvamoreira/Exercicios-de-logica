<?php

function NumPrimo($numero)
{
    //isso é pra identificar se é menor que 1. q numeros primos nao tem abaixo dele.
    if ($numero <= 1) {
        return false;
    }
    //aqui é enquanto $i for menor igual a raiz do numero q for colocar, repete o loob e adicione mais um.
    for ($i = 1; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// a funcao NumPrimo voltar true escreva é um numero primo. se nao...
if (NumPrimo($numero)) {
    echo "é um numero primo";
} else {
    echo "nao é um numero primo";
}
$numero = 0;  //coloque um numero aqui pra identificar se é ou nao é primo.