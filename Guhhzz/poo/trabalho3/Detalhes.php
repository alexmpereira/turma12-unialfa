<?php

namespace UniAlfa\Poo;

class Detalhes
{

    public array $opcionais;

    public function setDetalhes(array $opcionais): void
    {
        $this->opcionais = $opcionais;
    }

    public function getDetalhes(): array
    {
        return $this->opcionais;
    }
}
