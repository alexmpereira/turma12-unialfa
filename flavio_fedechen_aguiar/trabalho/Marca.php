<?php

class Marca
{
    public function __construct(private string $nome)
    {
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
}
