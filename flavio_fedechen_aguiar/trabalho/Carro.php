<?php

class Carro
{
    public function __construct(
        private string $nome,
        private int $cavalos,
        private int $ano,
        private string $cor,
        private Motor $motorizacao,
        private Marca $marca
    ) {
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setCavalos(int $cavalos)
    {
        $this->cavalos = $cavalos;
    }
    public function getCavalos(): int
    {
        return $this->cavalos;
    }

    public function setAno(int $ano)
    {
        $this->ano = $ano;
    }
    public function getAno(): int
    {
        return $this->ano;
    }

    public function setCor(string $cor)
    {
        $this->cor = $cor;
    }
    public function getCor(): string
    {
        return $this->cor;
    }

    public function setMotorizacao(Motor $motorizacao)
    {
        $this->motorizacao = $motorizacao;
    }
    public function getMotorizacao(): Motor
    {
        return $this->motorizacao;
    }


    public function setMarca(Marca $marca)
    {
        $this->marca = $marca;
    }
    public function getMarca(): Marca
    {
        return $this->marca;
    }
}
