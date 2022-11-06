<?php

namespace UniAlfa\Poo;

class Carro
{
    private string $marcaModelo;
    private string $modelo;
    private array $detalhes;

    public function setMarcaModelo(string $marca): void
    {
        $this->marcaModelo = $marca;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setDetalhes(array $detalhes): void
    {
        $this->detalhes = $detalhes;
    }

    public function getMarcaModelo(): string
    {
        return $this->marcaModelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getDetalhes(): string
    {
        $array = "";

        foreach ($this->detalhes as $key) {
            $array = $array . "<br> - " . $key;
        }

        return $array;
    }
}
