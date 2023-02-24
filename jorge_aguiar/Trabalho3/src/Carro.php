<?php

namespace UniAlfa\Poo;

class Carro
{
    private string $marca;
    private string $modelo;
    private array $detalhes;

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setDetalhes(array $detalhes): void
    {
        $this->detalhes = $detalhes;
    }

    public function getMarca(): string
    {
        return $this->marca;
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
