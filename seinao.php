<?php
function teste($array)
{
    $matriz = ['frutas' => [], 'cores' => []];

    foreach ($array as $fruta => $cor) {
        $matriz['frutas'][] = $fruta;
        $matriz['cores'][] = $cor;
    }
    return $matriz;
}
$array = ['banana' => "amarelo", "maça" => "vermelho", "pinha" => "verde", "melao" => "branco"];
$arrai = teste($array);
echo "\n";
echo "Frutas e Cores:\n";

for ($i = 0; $i < count($arrai['frutas']); $i++) {

    echo $arrai['frutas'][$i] . " => " . $arrai['cores'][$i] . "\n";
}


echo "\n";
echo "\n";


$arrray = [
    'PerfilDedei' =>   [
        'id' => 10,
        'nome' => 'Dedei',
        'Genero' => 'masculino'
    ],

    'PerfilDindim' => [
        'id' => 24,
        'nome' => 'Dindim',
        'Genero' => 'duvidoso'
    ],
    'PerfilMayla' => [
        'id' => 22,
        'nome' => 'Mayla',
        'Genero' => 'femea',
    ]
];

foreach ($arrray as $key => $elemento) {

    foreach ($elemento as $key2 => $elemento2) {

        echo str_replace("Array", "", print_r($key2, true)) . "";
        echo " => ";
        print_r($elemento2);
        echo "\n";
    }

    echo "\n";
}
