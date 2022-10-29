<?php

namespace UniAlfa\Poo;


class FormaBolo {
 
    public array $ingredientes;
    public int $tempoForno;

    public function fazerBolo(): void {
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


}


?>