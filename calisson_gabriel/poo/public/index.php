<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Unialffa\poo\formaBolo;

$tempodeforno = $_REQUEST["tempodeforno"];

$turmaBolo = new formaBolo();
$turmaBolo->fazerbolo();
$turmaBolo->colocarnaforma($tempodeforno);


s