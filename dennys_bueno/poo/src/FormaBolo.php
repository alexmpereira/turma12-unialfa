<?php

namespace Unialfa\Poo;

class FormaBolo
{
  public array $ingredientes = ["Farinha", "Ovo", "Leite", "Acucar"];
  public int $tempoForno = 1;

  public function fazerBolo(): void
  {
    $this->misturaIngredientes();
  }

  public function misturaIngredientes(): void
  {
    if (count($this->ingredientes) === 0) {
      echo "Não há ingredientes suficientes";
      return;
    }

    echo "Misturando os ingredientes " . json_encode($this->ingredientes) . "<br>";
  }

  public function colocarNoForno(int $tempoForno = 1): void
  {
    $this->tempoForno = $tempoForno;
    echo "Bolo colocado no forno. Tempo de preparo é $this->tempoForno horas <br>";
  }

  public function transferirIngredientes(string $ingrediente, FormaBolo $boloAReceberIngrediente): void
  {
    array_push($boloAReceberIngrediente->ingredientes, $ingrediente);
    echo "Ingrediente enviado para outro bolo";
  }
  public function boloFeito()
  {
    echo "Seu bolo esta pronto";
  }
}
