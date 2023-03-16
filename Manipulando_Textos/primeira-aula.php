<?php

$nome = 'Vinicius dos Santos';

$ehDaMinhaFamilia = str_contains($nome, 'Dias'); //str_contains — Determine se uma cadeia de caracteres contém uma determinada subcadeia de caracteres

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
