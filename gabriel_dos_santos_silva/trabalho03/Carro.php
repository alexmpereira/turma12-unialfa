<?php

namespace UniAlfa\Trabalho;

class Carro {

    public int $id;

    public Marca $marca;

    public Detalhe $detalhe;


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

    public function setDetalhe($detalhe): void
    {
        $this->detalhe = $detalhe;
    }

    public function getDetalhe() : Detalhe
    {
        return $this->detalhe;
    }


}

?>