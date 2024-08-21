<?php

namespace Rafael\PhpEstudos;

class PessoaJuridica extends Pessoa implements InfoInterface {
    private string $cnpj;
    const OBJECT_TYPE = "Pessoa Jurídica";

    public function __construct(string $nome, string $endereco,Email $email, string $cnpj) {
        parent::__construct($nome, $endereco,$email);
        $this->cnpj = $cnpj;
    }

    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function obterDetalhes(): string {
        return "Nome: {$this->getNome()}, CNPJ: {$this->getCnpj()}, Endereço: {$this->getEndereco()}, , E-mail: {$this->getEmail()}";
    }
}
?>
