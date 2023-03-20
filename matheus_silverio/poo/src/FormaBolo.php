<?php

namespace Unialfa\Poo;

class FormaBolo {

    public array $ingredientes = ["Farinha", "Açucar", "Ovos"];
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

public function colocarNoForno( int $tempoForno = 1): void
{
    $this->tempoForno = $tempoForno;
    echo "Colocando bolo no forno, tempo para ficar pronto é $this->tempoForno horas <br>";
}

}

?>