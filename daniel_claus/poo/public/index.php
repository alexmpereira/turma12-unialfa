<?php

require_once __DIR__ . '/../vendor/autoload.php';


use Unialfa\Poo\FormaBolo;

$turmaBolo = new FormaBolo();
$turmaBolo->fazerBolo();

$outroBolo = new FormaBolo();
$outroBolo->colocarNoForno();

var_dump($turmaBolo);
echo '<br>';
var_dump($outroBolo);