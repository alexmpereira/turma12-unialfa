<?php
namespace Unialfa\trabalho;

class Carro {
    private int $id;
    private nome $nome;
    private modelo $modelo;
    private ano $ano;

    public function setId($id):void
{
    $this->id = $id;
} 

public function getId():int
{
    return $this->id;
}

public function setNome($id):void
{
    $this->nome = $nome;
} 

public function getNome():Nome
{
    return $this->nome;
}

public function setModelo($id):void
{
    $this->modelo = $modelo;
} 

public function getModelo():modelo
{
    return $this->modelo;
}

public function setAno($id):void
{
    $this->ano = $ano;
} 

public function getAno():ano
{
    return $this->ano;
}
}
?>