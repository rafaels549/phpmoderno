<?php

namespace Rafael\PhpEstudos;

class PessoaJuridica extends Pessoa {
    private string $cnpj;

    public function __construct(string $nome, string $endereco, string $cnpj) {
        parent::__construct($nome, $endereco);
        $this->cnpj = $cnpj;
    }

    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function obterDetalhes(): string {
        return "Nome: {$this->getNome()}, CNPJ: {$this->getCnpj()}, Endereço: {$this->getEndereco()}";
    }
}
?>
