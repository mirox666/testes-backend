<?php
use PHPUnit\Framework\TestCase;
use App\Cliente;

class ClienteTest extends TestCase{
    public function testVerificarCamposVazios(){
        $meuCliente = new Cliente("Zilda","Zilda@email.com",123456);

        $this->assertTrue($meuCliente->validaCampos());
    }
    public function testContarItensPreferencia(){
        $meuCliente = new Cliente("Laele","laele@laele.com",456);
        $meuCliente->setPreferencia(["Promoção","Roupa Barata","Comida Baiana"]);

        $this->assertCount(3,$meuCliente->getPreferencia());//Esse teste irá contar quantos itens existem dentro do vetor.
    }
    public function testVerificarTotalCompras(){
        $meuCliente = new Cliente("Igor","igorrt@hotmail.com",654321);
        $meuCliente->setTotalCompras(450);

        $this->assertGreaterThan(400,$meuCliente->getTotalCompras());
    }
}