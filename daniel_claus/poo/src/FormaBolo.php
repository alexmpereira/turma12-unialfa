<?php

namespace Unialfa\Poo;

class FormaBolo{

    public array $ingredientes = ["Farinha", "Ovo", "Leite", "Açucar"];
    public int $tempoForno = 1;

    public function fazerBolo(): void
    {
        $this->misturaIngredientes();

    }
    public function misturaIngredientes(): void{
        if (count($this->ingredientes) === 0) {

            echo "Não temos ingredientes suficientes";
            return;
        }
            echo "Misturando os ingredientes " . json_encode($this->ingredientes . '<br>');
    }

    public function colocarNoForno(int $tempoForno = 1): void
    {
        $this->tempoForno = $tempoForno;
        echo "Colocando no forno o bolo, tempo para ficar pronto é de $this->tempoForno horas <br>";

    }

}
