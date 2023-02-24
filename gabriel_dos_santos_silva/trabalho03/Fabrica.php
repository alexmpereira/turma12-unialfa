<?php



namespace UniAlfa\Trabalho;

use DateTime;

class Fabrica {


    public function fabricar(): Carro {


        // DEFININDO OS DETALHES


        $detalhes = new Detalhe();
        $detalhes->setId(1);
        $detalhes->setModelo('Corsa Classic');
        $detalhes->setVidrosEletricos(true);
        $detalhes->setArCondicionado(true);
        $detalhes->setTetoSolar(false);


        $marca = new Marca();
        $marca->setId(1);
        $marca->setDescricao("Chevrolet");
        $marca->setDesde(new DateTime('01/01/1999'));
        $marca->setAte(null);

        $carro = new Carro();
        $carro->setId(1);
        $carro->setMarca($marca);
        $carro->setDetalhe($detalhes);

        return $carro;

    }

}

$this->fabricar();



?>