<?php

$array = [
    0 => 'um',
    1 => 'dois',
    3 => 'tres',
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL; //count — Conta todos os elementos em uma matriz ou em um objeto Countable

var_dump(array_is_list($array)); //array_is_list — Verifica se uma determinada matriz é uma lista