<?php

use Dlimars\CreditCardReturns\Acquirers\Stone;
use Dlimars\CreditCardReturns\Message;

class StoneTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $stone = $this->getStub();
        $this->assertCount(2, $stone->getMessages());
    }

    public function testFindMessageByCode()
    {
        $stone = $this->getStub();
        $this->assertEquals("Foo", $stone->getMessageByCode("10")->getMessage());

        $stone = $this->getStub("en-US");
        $this->assertEquals("Baz", $stone->getMessageByCode("10")->getMessage());
    }

    public function testMessageIntances()
    {
        $stone = $this->getStub();
        $this->assertInstanceOf(Message::class, $stone->getMessageByCode("10"));
    }

    private function getStub($lang = 'pt-BR')
    {
        return new Stone(__DIR__ . "/../Stubs/$lang/messages.php");
    }
}
