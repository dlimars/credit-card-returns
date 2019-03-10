<?php

use Dlimars\CreditCardReturns\Acquirers\MercadoPago;
use Dlimars\CreditCardReturns\Message;

class MercadoPagoTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $mercadoPago = $this->getStub();
        $this->assertCount(2, $mercadoPago->getMessages());
    }

    public function testFindMessageByCode()
    {
        $mercadoPago = $this->getStub();
        $this->assertEquals("Foo", $mercadoPago->getMessageByCode("10")->getMessage());

        $mercadoPago = $this->getStub("en-US");
        $this->assertEquals("Baz", $mercadoPago->getMessageByCode("10")->getMessage());
    }

    public function testMessageIntances()
    {
        $mercadoPago = $this->getStub();
        $this->assertInstanceOf(Message::class, $mercadoPago->getMessageByCode("10"));
    }

    private function getStub($lang = 'pt-BR')
    {
        return new MercadoPago(__DIR__ . "/../Stubs/$lang/messages.php");
    }
}
