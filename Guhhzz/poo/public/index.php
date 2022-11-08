<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Unialfa\Poo\Marca;
use Unialfa\Poo\Carro;
use Unialfa\Poo\Detalhes;

$marca = new Marca();
$carro = new Carro();
$detalhes = new Detalhes();

$marca->setMarca("BMW");
$detalhes->setDetalhes(["Motor v6", "Teto solar", "Combio automatico"]);

$carro->setMarcaModelo($marca->getMarca());
$carro->setModelo("X6");
$carro->setDetalhes($detalhes->getDetalhes());

var_dump($carro);

$marca = new Marca();
$carro = new Carro();
$detalhes = new Detalhes();

$marca->setMarca("Mercedes-Benz");
$detalhes->setDetalhes(["Motor v8", "Direção borboleta", "GPS", "Assistente virtual - Mercedes\""]);

$carro->setMarcaModelo($marca->getMarca());
$carro->setModelo("GLC 300");
$carro->setDetalhes($detalhes->getDetalhes());


echo "<br><br>";
var_dump($carro);
