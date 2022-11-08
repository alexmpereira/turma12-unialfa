<?php

namespace UniAlfa\Trabalho;

class Detalhe {


    private int $id;
    private string $modelo;
    private bool $arCondicionado;
    private bool $vidrosEletricos;
    private bool $tetoSolar;

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

    public function setArCondicionado($arCondicionado): void
    {
        $this->arCondicionado = $arCondicionado;
    }

    public function getArCondicionado() : bool
    {
        return $this->arCondicionado;
    }

    public function setVidrosEletricos($vidrosEletricos): void
    {
        $this->vidrosEletricos = $vidrosEletricos;
    }

    public function getVidrosEletricos() : bool
    {
        return $this->vidrosEletricos;
    }


    public function setTetoSolar($tetoSolar): void
    {
        $this->tetoSolar = $tetoSolar;
    }

    public function getTetoSolar() : bool
    {
        return $this->tetoSolar;
    }


}



?>