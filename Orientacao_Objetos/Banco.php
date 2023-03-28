<?php
// Requerindo código de outros arquivos
require_once 'Conta.php'; 
require_once 'Titular.php';
require_once 'Cpf.php';

$titular1 = new Titular(new CPF('123.456.789-10'), 'Marcos Eduardo'); //Instanciando um Titular e um CPF em titular1;
$primeiraConta = new Conta($titular1);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Henrique'));
unset($segundaConta); //Retira a referência presente na segunda conta
echo Conta::recuperaNumeroDeContas();