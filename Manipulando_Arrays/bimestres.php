<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2); //array_diff_key — Calcula a diferença de matrizes usando chaves para comparação
$nomesAlunos = array_keys($alunosFaltantes);//array_keys — Retorna todas as chaves ou um subconjunto das chaves de uma matriz
$notasAlunos = array_values($alunosFaltantes);//array_values — Retorna todos os valores de uma matriz

var_dump(array_combine($notasAlunos, $nomesAlunos)); //array_combine — Cria uma matriz usando uma matriz para chaves e outra para seus valores
var_dump(array_flip($alunosFaltantes));//array_flip — Troca todas as chaves com seus valores associados em uma matriz
