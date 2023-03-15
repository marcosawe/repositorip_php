<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados); //extract — Importar variáveis de uma matriz para a tabela de símbolos atual
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); // compact — Criar matriz contendo variáveis e seus valores