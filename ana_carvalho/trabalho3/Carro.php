<?php

namespace Unialfa\Trabalho3;

class Carro 
{
    public array $detalhes = ["cor", "combustivel", "cambio", "portas"];
    public varchar $marca = "BMW";
    public varchar $ano_fabricacao = "2022";
	
    

    public function fabricacao(): void 
    {
        $this->montarCarro();
    }
    
    public function montarCarro(): void 
    {
        if(count($this->detalhes) === 0 ) {
            echo "Arquetipo incompativel";
            return;
        }

        echo "Montando veiculo " . json_encode($this->detalhes . $marca . $ano_fabricacao '<br>'); 
    }

    
}


