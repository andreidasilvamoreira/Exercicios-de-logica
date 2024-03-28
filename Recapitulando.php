<?php


echo "\n";
echo "\n";
echo "Este é o resultado do \033[1;31mExercicio 1\033[0m.";
echo "\n";
echo "\n";
//-------------------------------------------------------------------------------


function numPrimo($num){

    if($num < 0){
        return false;
    }
    for($i = 2; $i < sqrt($num); $i++){
        if ($num % $i == 0){
            return false;
        }
    }
    return true;
}

$num = 13;

if(numPrimo($num)){
    echo"È um numero primo";
}else {
    echo "Não é um numero primo";
}
echo "\n";
echo "\n";
echo "Este é o resultado do \033[1;31mExercicio 2\033[0m.";
echo "\n";
echo "\n";
//-------------------------------------------------------------------------------

function calcMedia($array){
    $soma = 0;
    $quantidade = 0;

    foreach ($array as $numero){
        $soma += $numero;
        $quantidade++;
    }
   if ($quantidade) {
    $valor = $soma / $quantidade;
    return $valor;
   }
   
}

$array = [50,50,50,50];
$resultado = calcMedia($array);
echo $resultado;

echo "\n";
echo "\n";
echo "Este é o resultado do \033[1;31mExercicio 3\033[0m.";
echo "\n";
echo "\n";

//-------------------------------------------------------------------------------

// function stringInvertida($string){
// $stringInvertida = '';
// 
// for($i = strlen($string)-1; $i>=0; $i--){
// $stringInvertida .= $string[$i];
// }
// return $stringInvertida;
// }

$string = 'oi';
echo "string original: ". $string; "\n";
echo "\n";
echo "string intertida: ". stringInvertida($string);

echo "\n";
echo "\n";
echo "Este é o resultado do \033[1;31mExercicio 4\033[0m.";
echo "\n";
echo "\n";

//-------------------------------------------------------------------------------

function resolFatorial ($fatorial) {
    if ($fatorial <= 0){
        echo "nao existe fatorial de numeros negativos";
    }
    $resultado = 1;
    for ($i = $fatorial; $i > 1; $i--){
        $resultado *= $i;
    }
    return $resultado;
}

$fatorial = 3;

$resultado = resolFatorial($fatorial);
echo $resultado;

echo "\n";
echo "\n";
echo "Este é o resultado do \033[1;31mExercicio 5\033[0m.";
echo "\n";
echo "\n";

//-------------------------------------------------------------------------------
echo esPalindromo('oi');
function esPalindromo($string){
    $stringinvertida = stringInvertida($string);
    if ($stringinvertida == $string){
        return " é palindromo";
    }
    return "não é um palindromo";
}

function stringInvertida($string){
    $stringInvertida = '';

    for($i = strlen($string)-1; $i>=0; $i--){
        $stringInvertida .= $string[$i];
    }
    return $stringInvertida;
}

echo "\n";
echo "\n";
echo "Este é o resultado do \033[1;31mExercicio 6\033[0m.";
echo "\n";
echo "\n";
 function ordenarNumero($p)
{

$quantidade = count($p);

    for ($i = 0; $i < $quantidade -1; $i++)
    {
            for ($j = 0; $j < $quantidade -$i -1; $j++)
            {
                    if($p [$j] > $p[$j+1])
                    {
                        $temp = $p[$j];
                        $p[$j ] = $p[$j + 1];
                        $p[$j+1] = $temp;
                    }
            }
    }
    return $p;
}

$array = [3,2,1,20,15,4,6,2,7,8,23];
$numerosOrdenados = ordenarNumero($array);

print_r($numerosOrdenados); 