<?php

use Dlimars\CreditCardReturns\Acquirers\Elavon;
use Dlimars\CreditCardReturns\Message;

class ElavonTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $elavon = $this->getStub();
        $this->assertCount(2, $elavon->getMessages());
    }

    public function testFindMessageByCode()
    {
        $elavon = $this->getStub();
        $this->assertEquals("Foo", $elavon->getMessageByCode("10")->getMessage());

        $elavon = $this->getStub("en-US");
        $this->assertEquals("Baz", $elavon->getMessageByCode("10")->getMessage());
    }

    public function testMessageIntances()
    {
        $elavon = $this->getStub();
        $this->assertInstanceOf(Message::class, $elavon->getMessageByCode("10"));
    }

    private function getStub($lang = 'pt-BR')
    {
        return new Elavon(__DIR__ . "/../Stubs/$lang/messages.php");
    }
}
