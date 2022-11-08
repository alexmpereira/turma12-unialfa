<?php
namespace UniAlfa\Trabalho;
class Manufacturer {
    public function manufacturer(): Vehicle {
        $detalhes = new Details();
        $detalhes->setId(1);
        $detalhes->setModel('Civic');
        $detalhes->setYear('2017');

        $brand = new Brand();
        $brand->setId(1);
        $brand->setName("Honda");

        $vehicle = new Vehicle();
        $vehicle->setId(1);
        $vehicle->setBrand($brand);
        $vehicle->setDetails($details);

        return $vehicle;
    }
}
$this->manufacturer();
?>