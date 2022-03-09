<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Campinas', 'Santa Eudóxia', 'Arnaldo simões pinto', '23');
$marcos = new Titular(new CPF('123.456.789-10'), 'Marcos Batochio', $endereco);
$primeiraConta = new Conta($marcos);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$carol = new Titular(new CPF('698.549.548-10'), 'Carol Morales', $endereco);
$segundaConta = new Conta($carol);
var_dump($segundaConta);

$outroEndereco = new Endereco('Campinas', 'Andorinhas', 'Planalto', '59');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Cleide', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
