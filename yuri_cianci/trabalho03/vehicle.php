<?php

namespace UniAlfa\Trabalho;
class Vehicle {
    private int $id;
    private Brand $brand;
    private Details $details;

    public function setId($id):void
    {
        $this->id = $id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setBrand($brand):void
    {
        $this->brand = $brand;
    }

    public function getBrand(): Brand
    {
        return $this->brand;
    }

    public function setDetails($details): void
    {
        $this->details = $details;
    }

    public function getDetails() : Details
    {
        return $this->details;
    }
}
?>