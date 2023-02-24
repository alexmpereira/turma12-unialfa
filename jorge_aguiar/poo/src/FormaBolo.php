<?php

namespace Unialfa\Poo;

class FormaBolo
{
    public array $ingredientes = ["Farinha", "Ovo", "Leite", "Açucar"];
    public int $tempoForno = 3;

    public function fazerBolo(): void
    {
        $this->misturaIngreientes();
    }

    public function misturaIngreientes(): void
    {
        if (count($this->ingredientes) === 0) {
            echo "Não temos ingredientes suficientes";
            return;
        }

        echo "Misturando os ingredientes... " . json_encode($this->ingredientes) . "<br>";
    }

    public function colocarNoForno(int $tempoForno = 1): void
    {
        $this->tempoForno = $tempoForno;
        echo "O bolo está assando tempo total: $this->tempoForno Horas<br>";
    }

    public function transferirIngredientes(string $ingrediente, FormaBolo $boloAReceberIngrediente): void
    {
        array_push($boloAReceberIngrediente->ingredientes, $ingrediente);

        echo "Ingredientes enviados para o outro bolo";
    }
}
