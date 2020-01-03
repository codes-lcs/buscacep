<?php

use PHPUnit\Framework\TestCase;
use Codeslcs\BuscaCep\Buscar;

class BuscarTest extends TestCase {
    
    /**
     * @dataProvider dadosTeste
     */
    public function testGetEnderecoCepDefaultUsage(string $cep, array $enderecoEsperado) {
        
        // USO COM CONJUNTO DE DADOS DATAPROVIDER
        $resultado =  new Buscar;
        $resultado = $resultado->getEnderecoCep($cep);

        $this->assertEquals($enderecoEsperado, $resultado);

        // USO MANUAL
        // $esperado = [
        //     "cep" => "01001-000",
        //     "logradouro" => "Praça da Sé",
        //     "complemento" => "lado ímpar",
        //     "bairro" => "Sé",
        //     "localidade" => "São Paulo",
        //     "uf" => "SP",
        //     "unidade" => "",
        //     "ibge" => "3550308",
        //     "gia" => "1004"
        // ];

        // $resultado =  new Buscar;
        // $resultado = $resultado->getEnderecoCep('01001000');

        // $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste() 
    {
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" => "3550308",
                    "gia" => "1004"
                ]
            ],
            "Endereço Avenida Paulista" => [
                "01310200",
                [
                    "cep" => "01310-200",
                    "logradouro" => "Avenida Paulista",
                    "complemento" => "de 1512 a 2132 - lado par",
                    "bairro" => "Bela Vista",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" => "3550308",
                    "gia" => "1004"
                ]
            ]
        ];
    }
}