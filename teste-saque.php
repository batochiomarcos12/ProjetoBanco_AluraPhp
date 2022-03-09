<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('337.983.268-51'),
        'Marcos Batochio',
        new Endereco('Campinas', 'Santa Eudóxia', 'Arnaldo simões pinto', '23')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
