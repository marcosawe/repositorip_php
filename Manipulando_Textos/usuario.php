<?php

$nome = 'Vinícius Dias';
$email = ' vinícius@alura.com.br ';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL; //mb_strlen — Obter comprimento da cadeia de caracteres

if (mb_strlen($senha) < 8) {
    echo 'Senha insergura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); //strpos — Encontra a posição da primeira ocorrência de uma string

$usuario = substr($email, 0, $posicaoDoArroba); //substr — Retorna parte de uma cadeia de caracteres

echo mb_strtoupper($usuario) . PHP_EOL; //mb_strtoupper — Tornar uma cadeia de caracteres maiúscula
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL; //substr — Retorna parte de uma cadeia de caracteres

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Vinicius Dias,24,vinicius@alura.com.br';
var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;