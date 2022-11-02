<?php

namespace UniAlfa\Poo;


class FormaBolo {
 
    public array $ingredientes;
    public int $tempoForno;

    public function fazerBolo(): void 
    {
        $this->misturarIngredientes();
    }

    public function misturarIngredientes() : void
    {

        if(count($this->ingredientes) === 0) {
            echo "Não temos ingredientes suficientes!";
            return;
        }

        echo "Misturando os ingredientes " . json_encode($this->ingredientes);

    }


    public function colocarNoForno(int $tempoForno = 1): void 
    {
        $this->tempoForno = $tempoForno;
    }

    public function colocarIngredientes(array $ingredientes = ['mandioca', 'alface']): void 
    {
        $this->ingredientes = $ingredientes;
    }


}
