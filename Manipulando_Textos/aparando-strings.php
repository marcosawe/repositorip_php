<?php

$csv = ',.Vinicius Dias,24,.';

echo trim($csv, '.,') . PHP_EOL; //trim — Retira espaço no início e final de uma string
echo ltrim($csv, '.,') . PHP_EOL;//ltrim — Retira espaço no início de uma string
echo rtrim($csv, '.,') . PHP_EOL;//rtrim — Retira espaço no final de uma string
