<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Unialfa\Poo\FormaBolo;

$tempoForno = $_REQUEST["tempoDeForno"];

$turmaBolo = new FormaBolo();
$turmaBolo->fazerBolo();

$outroBolo = new FormaBolo();
$outroBolo ->formaBolo(2);

var_dump($turmaBolo);
echo '<br>';
var_dump($outroBolo);

