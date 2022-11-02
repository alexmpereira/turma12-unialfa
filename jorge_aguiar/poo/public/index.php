<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Unialfa\Poo\FormaBolo;

// var_dump($_REQUEST["tempoDeForno"]); exit;

$tempoDeForno = $_REQUEST["tempoDeForno"];

$turmaBolo = new FormaBolo();
$outroBolo = new FormaBolo();

$outroBolo->fazerBolo();
$outroBolo->colocarNoForno($tempoDeForno);

var_dump($turmaBolo);
echo '<br>';
var_dump($outroBolo);
