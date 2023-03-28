<?php
// Requerindo código de outros arquivos
require_once 'src/model/Pessoa.php';
require_once 'src/model/Cpf.php';
require_once 'src/model/account/Titular.php';
require_once 'src/model/account/Conta.php'; 
require_once 'src/model/Endenreco.php';

//Usando namespaces
use aplication\model\CPF;
use aplication\model\Endereco;
use aplication\model\account\Titular;
use aplication\model\account\Conta;
use aplication\model\Pessoa;

$endereco = new Endereco("MG","Uberlandia","Osvaldo Resende","Bernardo Cupertino",
    "965");
$titular1 = new Titular(new CPF('123.456.789-10'), 'Marcos Eduardo',$endereco); //Instanciando um Titular e um CPF em titular1;
$primeiraConta = new Conta($titular1);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia',$endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Henrique',$endereco));
unset($segundaConta); //Retira a referência presente na segunda conta
echo Conta::recuperaNumeroDeContas();