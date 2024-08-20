<?php
namespace Rafael\PhpEstudos;

abstract class Pessoa {
    private string $nome;
    private string $endereco;

    public function __construct(string $nome, string $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getEndereco(): string {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void {
        $this->endereco = $endereco;
    }

    abstract public function obterDetalhes(): string;
}
?>
