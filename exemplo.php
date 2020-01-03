<?php

require_once "vendor/autoload.php";

use Codeslcs\BuscaCep\Buscar;

$busca = new Buscar;

$endereco = $busca->getEnderecoCep('01001000');

print_r($endereco);