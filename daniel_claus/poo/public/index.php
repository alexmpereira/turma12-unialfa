<?php

require_once __DIR__ . '/../vendor/autoload.php';


use Unialfa\Poo\FormaBolo;

//var_dump($_REQUEST["tempoDeForno"]);exit;
$tempoDeForno = $_REQUEST["tempoDeForno"];

$turmaBolo = new FormaBolo();
$turmaBolo->fazerBolo();
$turmaBolo->colocarNoForno($tempoDeForno);

$outroBolo = new FormaBolo();
$outroBolo->trasferirIngredientes("Chocolate", $turmaBolo);

$turmaBolo->fazerBolo();
