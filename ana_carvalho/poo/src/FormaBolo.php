<?php

namespace Unialfa\Poo;

class Formabolo 
{
    public array $ingredientes;
    public int $tempoForno;

    public function fazerBolo(): void 
    {
        $this->misturaIngredients();
    }
    
    public function misturaIngredients(): void 
    {
        if(count($this->ingredientes) === 0 ) {
            echo "Não temos ingredientes suficientes";
            return;
        }
        echo "misturando ingredientes." . json_encode($this->ingredientes); 
    }
}


