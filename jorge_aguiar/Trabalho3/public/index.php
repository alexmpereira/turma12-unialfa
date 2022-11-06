<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
require_once __DIR__ . "/../vendor/autoload.php";

use Unialfa\Poo\Marca;
use Unialfa\Poo\Carro;
use Unialfa\Poo\Detalhes;

function fabricar($nomeMarca, $nomeModelo, $opcionais)
{
    $marca = new Marca();
    $carro = new Carro();
    $detalhes = new Detalhes();

    $marca->setMarca($nomeMarca);
    $detalhes->setDetalhes($opcionais);

    $carro->setMarca($marca->getMarca());
    $carro->setModelo($nomeModelo);
    $carro->setDetalhes($detalhes->getDetalhes());

    echo "Marca: " . $carro->getMarca() . ",<br> Modelo: " . $carro->getModelo() . ",<br> Opcionais: " . $carro->getDetalhes();
}


fabricar("Chevrolet", "Opala", ["Ar Condicionado", "Bancos de Couro"]);
echo "<br><br>";

fabricar("Volkswagen", "Golf", ["Ar Condicionado", "Direção Hidráulica", "Vidro Elétrico", "Bancos de Couro", "Travas Elétricas", "Alarme", "Air Bag"]);
echo "<br><br>";

fabricar("Ford", "F-1000", ["Ar Condicionado", "Direção Hidráulica", "Bancos de Couro", "Rádio AM/FM"]);
