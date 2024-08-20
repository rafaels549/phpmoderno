<?php
require __DIR__ . '/vendor/autoload.php';

use Rafael\PhpEstudos\PessoaFisica;


$pessoaFisica = new PessoaFisica(
    'João da Silva',
    '123.456.79-00',
    '01/01/1980',
    'Rua Exemplo, 123, Salvador'
);


echo "Nome: " . $pessoaFisica->getNome() . PHP_EOL;
echo "CPF: " . $pessoaFisica->getCpf() . PHP_EOL;
echo "Data de Nascimento: " . $pessoaFisica->getDataNascimento() . PHP_EOL;
echo "Endereço: " . $pessoaFisica->getEndereco() . PHP_EOL;
echo "Detalhes: " . $pessoaFisica->obterDetalhes() . PHP_EOL;


$pessoaFisica->setNome('Maria Oliveira');
$pessoaFisica->setEndereco('Avenida Teste, 456, Salvador');


echo PHP_EOL . "Dados atualizados:" . PHP_EOL;
echo "Nome: " . $pessoaFisica->getNome() . PHP_EOL;
echo "Endereço: " . $pessoaFisica->getEndereco() . PHP_EOL;
?>