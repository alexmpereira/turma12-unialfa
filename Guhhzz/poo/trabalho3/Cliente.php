<?php

namespace UniAlfa\Poo;

class Cliente {

    public array $opcionais;

    public function setCliente(array $opcionais): void
    {
        $this->opcionais = $opcionais;
    }

    public function getCliente(): array
    {
        return $this->opcionais;
    }
}
