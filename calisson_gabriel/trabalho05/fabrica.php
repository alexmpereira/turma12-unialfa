<?php

namespace UniAlfa\Trabalho;

use DateTime;

class Fabrica {


    public function fabricar(): Carro {


        $detalhes = new Detalhes();
        $detalhes->setId(1);
        $detalhes->setModelo('Golf MK3');
        $detalhes->setCarroInjetado(true);
        $detalhes->setTurbo(true);


        $marca = new Marca();
        $marca->setId(1);
        $marca->setDescricao('Golf');
        $marca->setDesde(new DateTime('25/05/1995'));
        $marca->setAte(null);

        $carro = new Carro();
        $carro->setId(1);
        $carro->setMarca($marca);
        $carro->setDetalhes($detalhes);

        return $carro;

    }

}

$this->fabricar();



?>