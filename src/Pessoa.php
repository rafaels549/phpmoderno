<?php
namespace Rafael\PhpEstudos;
use Rafael\PhpEstudos\Email;

abstract class Pessoa  {
    private string $nome;
    private string $endereco;
    private Email $email;

    public function __construct(string $nome, string $endereco, Email $email) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
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
    public function getEmail(): string {
        return $this->email->getEmail();
    }

    abstract public function obterDetalhes(): string;
}
?>
