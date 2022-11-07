<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Unialfa\Poo\Marca;
use Unialfa\Poo\Carro;
use Unialfa\Poo\Detalhes;

$marca = new Marca();
$carro = new Carro();
$detalhes = new Detalhes();

$marca->setMarca("Audi");
$detalhes->setDetalhes(["Motor v6", "Ar Condicionado", "Direção Elétrica"]);

$carro->setMarcaModelo($marca->getMarca());
$carro->setModelo("R8");
$carro->setDetalhes($detalhes->getDetalhes());

var_dump($carro);

$marca = new Marca();
$carro = new Carro();
$detalhes = new Detalhes();

$marca->setMarca("Mercedes-Benz");
$detalhes->setDetalhes(["Motor v8", "Ar Condicionado", "Direção Elétrica", "Central Multi-mídia 15\""]);

$carro->setMarcaModelo($marca->getMarca());
$carro->setModelo("GLA");
$carro->setDetalhes($detalhes->getDetalhes());


echo "<br><br>";
var_dump($carro);
