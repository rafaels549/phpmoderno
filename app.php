<?php
require __DIR__ . '/vendor/autoload.php';

use Rafael\PhpEstudos\PessoaFisica;
use Rafael\PhpEstudos\PessoaJuridica;
use Rafael\PhpEstudos\InfoInterface;

// Criando objetos de PessoaFisica e PessoaJuridica
$pessoaFisica = new PessoaFisica(
    'João da Silva',
    'Rua Exemplo, 123, Salvador',
    '123.456.79-00',
    '01/01/1980'
);

$pessoaJuridica = new PessoaJuridica(
    'Empresa Exemplo Ltda',
    'Avenida Empresarial, 456, Salvador',
    '12.345.678/0001-99'
);

//posso fazer desse modo
$pessoas = [$pessoaFisica, $pessoaJuridica];


foreach ($pessoas as $pessoa) {
   
    echo "Detalhes: " . $pessoa->obterDetalhes() . PHP_EOL;
}


//ou desse
function exibirDetalhes(InfoInterface $pessoa){

    echo "Detalhes: " . $pessoa->obterDetalhes() . PHP_EOL;
}

exibirDetalhes($pessoaFisica);
exibirDetalhes( $pessoaJuridica);




$pessoaFisica->setNome('Maria Oliveira');
$pessoaFisica->setEndereco('Avenida Teste, 456, Salvador');

$pessoaJuridica->setNome('Empresa Exemplo 2 Ltda');
$pessoaJuridica->setEndereco('Avenida Empresarial, 789, Salvador');


echo PHP_EOL . "Dados atualizados:" . PHP_EOL;
foreach ($pessoas as $pessoa) {
    echo "Detalhes: " . $pessoa->obterDetalhes() . PHP_EOL;
}
?>
