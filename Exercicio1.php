<?php

function NumPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$numero = 6;

if (NumPrimo($numero)) {
    echo "é um numero primo";
} else {
    echo "nao é um numero primo";
}