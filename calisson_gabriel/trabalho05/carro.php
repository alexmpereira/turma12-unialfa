<?php

namespace UniAlfa\Trabalho;

class Carro {

    private int $id;

    private Marca $marca;

    private Detalhes $detalhes;


    public function setId($id):void
    {
        $this->id = $id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setMarca($marca):void
    {
        $this->marca = $marca;
    }

    public function getMarca(): Marca
    {
        return $this->marca;
    }

    public function setDetalhes($detalhes): void
    {
        $this->detalhes = $detalhes;
    }

    public function getDetalhes() : Detalhes
    {
        return $this->detalhes;
    }


}

?>