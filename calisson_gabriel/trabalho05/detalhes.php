<?php

namespace UniAlfa\Trabalho;

class Detalhes {


    private int $id;
    private string $modelo;
    private bool $carroInjetado;
    private bool $turbo;

    public function setId($id):void
    {
        $this->id = $id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setModelo($modelo):void
    {
        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }


    public function setCarroInjetado($carroInjetado): void
    {
        $this->carroEletrico = $carroInjetado;
    }

    public function getCarroInjetado() : bool
    {
        return $this->carroInjetado;
    }


    public function setTurbo($turbo): void
    {
        $this->turbo = $turbo;
    }

    public function getTurbo() : bool
    {
        return $this->turbo;
    }

}



?>