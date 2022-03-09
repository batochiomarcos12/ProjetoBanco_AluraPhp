<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Marcos Batochio',
    new CPF('337.983.268-51'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Carol Morales',
    new CPF('327.228.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Cleide Aparecida',
    new CPF('148.951.789-11'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
