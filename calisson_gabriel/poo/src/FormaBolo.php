<?php

namespace Unialfa\Poo;

class FormaBolo
{
    public array $ingredientes;
    public int $tempoForno;

    public function fazendoBolo(): void {
        echo "Cheirinho de bolo de fuba";

        $this->misturaIngredientes();
    }

    public function misturaIngredientes(): void {

        if (count($this->ingredientes) === 0) {
            echo "Não temos ingredientes suficientes.";
            return;

        }

        echo "Misturando os ingredientes" . json_encode($this->ingredientes);

    }


}
