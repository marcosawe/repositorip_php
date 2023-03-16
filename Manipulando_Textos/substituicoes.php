<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace( //str_replace — Substitui todas as ocorrências da string de procura com a string de substituição
    ['poxa', 'caramba'],
    ['p', 'c'],
    $texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***@') . PHP_EOL; //strtr — Traduz caracteres ou substitui substrings
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;