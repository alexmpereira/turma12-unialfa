<?php

namespace UniAlfa\Poo;

class Fabricadecarro {
    
    public string $marcaModelo;
    public string $modelo;
    public array $Cliente;

    public function setMarcaModelo(string $marca): void
    {
        $this->marcaModelo = $marca;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setCliente(array $Cliente): void
    {
        $this->Cliente = $Cliente;
    }
}
