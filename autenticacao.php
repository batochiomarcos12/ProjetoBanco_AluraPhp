<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new \Alura\Banco\Modelo\Funcionario\Gerente(
    'Claeide AParecida',
    new CPF('148.951.789-11'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
