<?php

namespace UniAlfa\Poo;

class Carro
{
    public string $marcaModelo;
    public string $modelo;
    public array $detalhes;

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
}
