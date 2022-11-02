<?php

namespace Unialfa\Poo;

class FormaBolo
{
    public array $ingredientes = ["Farinha", "Ovo", "Leite", "Açúcar"];
    public int $tempoForno = 1;

    public function fazerBolo(): void //tipo que o metodo vai retornar
    {
        $this->misturaIngredientes();
    }

    public function misturaIngredientes(): void
    {
        if (count($this->ingredientes) == 0) {
            echo "Não temos ingredientes suficientes. <br>";
            return;
        }

        echo "Misturando os ingredientes... " . json_encode($this->ingredientes . '<br>');
    }

    public function colocarNoForno(int $tempoForno = 1): void
    {
        $this->tempoForno = $tempoForno;
        echo 'colocando no forno o bolo, tempo para ficar pronto é de $this->tempoForno horas <br>';
    }

    public function transferirIngredientes(string $ingrediente, FormaBolo $boloReceberIngrediente): void
    {
        array_push($boloReceberIngrediente->ingredientes, $ingrediente);

        echo "Ingredientes enviado para o outro bolo <br>";
    }
}
