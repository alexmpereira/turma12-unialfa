<?php

namespace Carro\poo;

class Carro {

    public  String $dataFabricacao;
    public String $modelo;
    public String $cor;


public function fabricarMotor(): void
{
    $this->motor();
    echo "Iniciando, tempo estimado: $this->motor horas <br>";
}

public function fabricarPainel(): void
{
   
    $this->painel();
    echo "Iniciando, tempo estimado: $this->painel horas <br>";
}

public function linhaMontagem(): void
{
    $this->linhaMontagem = $linhaMontagem;
    echo "Entrando na linha de motagem, tempo estimado: $this->linhaMontagem horas <br>";
}

public function testeQualidade(): void
{
    $this->testeQualidade = $testeQualidade;
    echo "Iniciando teste, tempo estimado: $this->testeQualidade horas <br>";
}


public function liberarVeiculo(): void
{   
   
    $this->liberarVeiculo = $liberarVeiculo;
    echo "Veículo liberado <br>";
}

}

?>