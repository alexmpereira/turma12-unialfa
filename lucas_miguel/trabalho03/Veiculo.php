<?php

class Veiculo {

    public $marca;
    public $modelo;
    public $ano;
    public $cor;


    public function getMarca($marca){
        return $marca;
    }
    
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo($modelo){
        return $modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAno($ano) {
        return $ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getCor($cor) {
        return $cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }



}



?>