<?php

$url = 'http://alura.com.br/';

if (str_starts_with($url, 'https')) { //tr_starts_with — Verifica se uma string começa com uma substring fornecida
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

if (str_ends_with($url, '.br')) { //tr_starts_with — Verifica se uma string termina com uma substring fornecida
    echo 'É um domínio do Brasil';
} else {
    echo 'É não um domínio do Brasil';
}

echo PHP_EOL;
