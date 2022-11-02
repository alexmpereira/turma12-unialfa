<?php

require_once __DIR__ . '/../vendor/autoload.php';

use UniAlfa\Poo\FormaBolo;

$tempoDeForno = $_REQUEST["tempoDeForno"];

$turmaBolo = new FormaBolo();
$turmaBolo->fazerBolo();
$turmaBolo->colocarNoForno($tempoDeForno);