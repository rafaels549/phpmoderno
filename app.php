<?php

require __DIR__ . '/vendor/autoload.php';

use Rafael\PhpEstudos\PessoaFisica;
use Rafael\PhpEstudos\PessoaJuridica;
use Rafael\PhpEstudos\InfoInterface;
use Rafael\PhpEstudos\Email;


try {
    $email = new Email("rafael@gmail.com");
    $pessoaFisica = new PessoaFisica(
        'João da Silva',
        'Rua Exemplo, 123, Salvador',
        $email,
        '123.456.79-00',
        '01/01/1980'
    );
} catch (InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage() . PHP_EOL;
}

try {
  
    $email = new Email("rafaelgmail.com");
    $pessoaJuridica = new PessoaJuridica(
        'Empresa Exemplo Ltda',
        'Avenida Empresarial, 456, Salvador',
        $email,
        '12.345.678/0001-99'
    );
} catch (InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage() . PHP_EOL;
}


$pessoas = [$pessoaFisica ?? null, $pessoaJuridica ?? null]; // Adiciona null se a criação falhar

foreach ($pessoas as $pessoa) {
    if ($pessoa) {
        echo "Detalhes: " . $pessoa->obterDetalhes() . PHP_EOL;
    }
}

function exibirDetalhes(InfoInterface $pessoa) {
    echo "Detalhes: " . $pessoa->obterDetalhes() . PHP_EOL;
}


if (isset($pessoaFisica)) {
    exibirDetalhes($pessoaFisica);
}
if (isset($pessoaJuridica)) {
    exibirDetalhes($pessoaJuridica);
}


if (isset($pessoaFisica)) {
    $pessoaFisica->setNome('Maria Oliveira');
    $pessoaFisica->setEndereco('Avenida Teste, 456, Salvador');
}

if (isset($pessoaJuridica)) {
    $pessoaJuridica->setNome('Empresa Exemplo 2 Ltda');
    $pessoaJuridica->setEndereco('Avenida Empresarial, 789, Salvador');
}

echo PHP_EOL . "Dados atualizados:" . PHP_EOL;
foreach ($pessoas as $pessoa) {
    if ($pessoa) {
        echo "Detalhes: " . $pessoa->obterDetalhes() . PHP_EOL;
    }
}
?>
