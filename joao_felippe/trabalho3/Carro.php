<?php

namespace classes;

class Carro {
    public String $modelo;
    public String $cor;
    public String $dataFabricacao;

    public function montar() {
        echo "Montando o carro...";
    }

    public function testar() {
        echo "Testando o carro...";
    }

    public function liberar() {
        echo "Liberando o carro...";
    }
}

?>