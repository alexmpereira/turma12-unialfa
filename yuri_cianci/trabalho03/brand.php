<?php
namespace UniAlfa\Trabalho;
class Brand {
    private int $id;
    private string $name;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
}