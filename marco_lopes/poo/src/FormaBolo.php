<?php

namespace Unialfa\Poo;

class FormaBolo
{
    public array $ingredientes = ["Farinha", "Ovo", "Leite", "Açucar"];
    public int $tempoForno= 3;

    public function fazerBolo(): void
    {
        $this->misturaIngredientes();
    }

    public function misturaIngredientes(): void
    {
        if (count($this->ingredientes) === 0) {
            echo "Não temos ingredientes sufucientes.";
            return;

        }

        echo "Misturando os ingredientes" . json_encode($this->ingredientes);
    }

    public function colocarNoForno(int $tempoForno = 1): void
    {
        $this->tempoForno = $tempoForno;
        echo "Colocando no
         forno o bolo, tempo para ficar pronto é de $this->tempoForno horas <br>";
    }

    public function transferirIngredientes(string $ingrediente, FormaBolo $boloAReceberIngrediente): void
    {
        array_push($boloAReceberIngrediente->ingredientes, $ingrediente);

        echo "ingredientes enviado para o outro bolo <br>";
    }
}