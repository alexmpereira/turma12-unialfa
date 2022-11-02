<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Unialfa\Poo\FormaBolo;

// var_dump($_REQUEST["tempoDeForno"]); exit;
$tempoDeForno = $_REQUEST["tempoDeForno"];

$turmaBolo = new FormaBolo();
$turmaBolo->fazerBolo();
$turmaBolo->colocarNoForno($tempoDeForno);

$outroBolo = new FormaBolo();
$outroBolo->transferirIngredientes("Chocolate", $turmaBolo);

$turmaBolo->fazerBolo();

// var_dump($turmaBolo);
// echo '<br>';
// var_dump($outroBolo);