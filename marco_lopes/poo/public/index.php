<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Unialfa\Poo\FormaBolo;

//var_dump($_REQUEST["tempoDeForno"]);exit;
$tempoDeForno = $_REQUEST["tempoDeForno"] ?? null;

$turmaBolo = new FormaBolo();
$turmaBolo->fazerBolo();

$outroBolo = new FormaBolo();
$outroBolo->transferirIngredientes("Chocolate", $turmaBolo);

$turmaBolo->fazerBolo();