<?php
namespace Unialfa\trabalho;

private int $id;
private String $nome;
private Veiculo $veiculo;

public function setId($id): void
{
    $this->id = $id;
}

public  function getId(): int
{
    return  $this->id;
}

public function setNome($id): void
{
    $this->nome = $nome;
}

public  function getNome(): String
{
    return  $this->nome;
}

public function setVeiculo($id): void
{
    $this->veiculo = $veiculo;
}

public  function getVeiculo(): veiculo
{
    return  $this->veiculo;
}
?>