<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];
// Diferentes formas de alocar valores dentro de um matriz
$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela'); //array_unshift — Preceder um ou mais elementos ao início de uma matriz

echo array_shift($alunos2022) . PHP_EOL; //array_shift — Deslocar um elemento para fora do início da matriz

echo array_pop($alunos2022) . PHP_EOL; //array_pop — Remova o elemento do final da matriz

var_dump($alunos2022);
