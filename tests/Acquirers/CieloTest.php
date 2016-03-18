<?php

use Dlimars\CreditCardReturns\Acquirers\Cielo;
use Dlimars\CreditCardReturns\Message;

class CieloTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $cielo = $this->getStub();
        $this->assertCount(2, $cielo->getMessages());
    }

    public function testFindMessageByCode()
    {
        $cielo = $this->getStub();
        $this->assertEquals("Foo", $cielo->getMessageByCode("10")->getMessage());

        $cielo = $this->getStub("en-US");
        $this->assertEquals("Baz", $cielo->getMessageByCode("10")->getMessage());
    }

    public function testMessageIntances()
    {
        $cielo = $this->getStub();
        $this->assertInstanceOf(Message::class, $cielo->getMessageByCode("10"));
    }

    private function getStub($lang = 'pt-BR')
    {
        return new Cielo(__DIR__ . "/../Stubs/$lang/messages.php");
    }
}
