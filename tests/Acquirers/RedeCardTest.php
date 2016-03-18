<?php

use Dlimars\CreditCardReturns\Acquirers\RedeCard;
use Dlimars\CreditCardReturns\Message;

class RedeCardTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $rede = $this->getStub();
        $this->assertCount(2, $rede->getMessages());
    }

    public function testFindMessageByCode()
    {
        $rede = $this->getStub();
        $this->assertEquals("Foo", $rede->getMessageByCode("10")->getMessage());

        $rede = $this->getStub("en-US");
        $this->assertEquals("Baz", $rede->getMessageByCode("10")->getMessage());
    }

    public function testMessageIntances()
    {
        $rede = $this->getStub();
        $this->assertInstanceOf(Message::class, $rede->getMessageByCode("10"));
    }

    private function getStub($lang = 'pt-BR')
    {
        return new RedeCard(__DIR__ . "/../Stubs/$lang/messages.php");
    }
}
