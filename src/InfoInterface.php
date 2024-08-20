<?php
namespace Rafael\PhpEstudos;
 interface InfoInterface {

    public function getNome(): string;
    public function setNome(string $nome): void;

    public function getEndereco(): string;
    public function setEndereco(string $endereco): void;

    public function obterDetalhes(): string;

     
}




?>