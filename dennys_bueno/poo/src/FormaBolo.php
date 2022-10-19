<?php

namespace Unialfa\Poo;

class FormaBolo
{
  public array $ingredientes;
  public int $tempoForma;

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

    echo "Misturando os ingredientes " . json_encode($this->ingredientes);
  }
}

function boloFeito()
{
  echo "Seu bolo esta pronto";
}
