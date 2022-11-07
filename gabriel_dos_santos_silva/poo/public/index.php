<?php

require_once __DIR__ . './../vendor/autoload.php';

require './../src/FormaBolo.php';

use UniAlfa\Poo\FormaBolo;

$turmaBolo = new FormaBolo;
$outroBolo = new FormaBolo;

var_dump($turmaBolo);
echo "<br>";
var_dump($outroBolo);