<?php

namespace Rafael\PhpEstudos;
use Rafael\PhpEstudos\Enum\TipoPessoa;


class PessoaFisica extends Pessoa implements InfoInterface {
    private string $cpf;
    private string $dataNascimento;
    const OBJECT_TYPE = "Pessoa Física";

    public function __construct(string $nome, string $endereco,Email $email, string $cpf, string $dataNascimento) {
        parent::__construct($nome, $endereco,$email);
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
    }
    public function getPessoaType(): TipoPessoa {
        return TipoPessoa::FISICA;
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
        return "Nome: {$this->getNome()}, CPF: {$this->getCpf()}, Data de Nascimento: {$this->getDataNascimento()}, Endereço: {$this->getEndereco()}, E-mail: {$this->getEmail()}";
    }
}
?>
