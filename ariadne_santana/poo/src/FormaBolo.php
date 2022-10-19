<?php

namespace Unialfa\Poo;

class FormaBolo {

    public array $ingredientes;
    public int $tempoForno;



public function fazerBolo(): void
{
    $this->misturaIngredientes();
}

public function misturaIngredientes(): void
{
    if(count($this->ingredientes) === 0) {
        echo "Não temos ingredientes";
        return;
    }

    echo "Misturando ingredientes" . json_encode($this->ingredientes);
}

}

?>