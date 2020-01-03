<?php

namespace Codeslcs\BuscaCep;

class Buscar 
{
    private $url = "https://viacep.com.br/ws/";

    public function getEnderecoCep(string $cep) : array {
        $cep = preg_replace('/[^0-9]/im','', $cep);

        $endereco = file_get_contents($this->url . $cep."/json");

        return (array) json_decode($endereco);
    }
}