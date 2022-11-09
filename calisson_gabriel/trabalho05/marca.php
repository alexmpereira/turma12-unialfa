<?php

namespace UniAlfa\Trabalho;

use DateTime;

class Marca {


    private int $id;
    private string $descricao;
    private DateTime $desde;
    private DateTime $ate;


    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }


    public function setDesde($desde): void
    {
        $this->desde = $desde;
    }

    public function getDesde() : DateTime
    {
        return $this->desde;
    }

    public function setAte($ate): void
    {
        $this->ate = $ate;
    }

    public function getAte() : DateTime
    {
        return $this->ate;
    }

}