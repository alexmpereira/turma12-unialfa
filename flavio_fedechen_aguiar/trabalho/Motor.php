<?php

class Motor
{
    public function __construct(
        private int $potencia,
        private int $cilindros,
        private int $oleo,
        private string $modelo,
    ) {
    }

    public function setPotencia(int $potencia)
    {
        $this->potencia = $potencia;
    }
    public function getPotencia(): int
    {
        return $this->potencia;
    }

    public function setCilindros(int $cilindros)
    {
        $this->cilindros = $cilindros;
    }
    public function getCilindros(): int
    {
        return $this->cilindros;
    }

    public function setOleo(int $oleo)
    {
        $this->oleo = $oleo;
    }
    public function getOleo(): int
    {
        return $this->oleo;
    }

    public function setModelo(string $modelo)
    {
        $this->modelo = $modelo;
    }
    public function getModelo(): string
    {
        return $this->modelo;
    }
}
