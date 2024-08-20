<?php

namespace Rafael\PhpEstudos;

class PessoaFisica extends Pessoa {
    private string $cpf;
    private string $dataNascimento;

    public function __construct(string $nome, string $endereco, string $cpf, string $dataNascimento) {
        parent::__construct($nome, $endereco);
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }

    public function getDataNascimento(): string {
        return $this->dataNascimento;
    }

    public function setDataNascimento(string $dataNascimento): void {
        $this->dataNascimento = $dataNascimento;
    }

    public function obterDetalhes(): string {
        return "Nome: {$this->getNome()}, CPF: {$this->getCpf()}, Data de Nascimento: {$this->getDataNascimento()}, Endereço: {$this->getEndereco()}";
    }
}
?>
