<?php

use Dlimars\CreditCardReturns\Acquirers\MasterCard;
use Dlimars\CreditCardReturns\Message;

class MasterCardTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $master = $this->getStub();
        $this->assertCount(2, $master->getMessages());
    }

    public function testFindMessageByCode()
    {
        $master = $this->getStub();
        $this->assertEquals("Foo", $master->getMessageByCode("10")->getMessage());

        $master = $this->getStub("en-US");
        $this->assertEquals("Baz", $master->getMessageByCode("10")->getMessage());
    }

    public function testMessageIntances()
    {
        $master = $this->getStub();
        $this->assertInstanceOf(Message::class, $master->getMessageByCode("10"));
    }

    private function getStub($lang = 'pt-BR')
    {
        return new MasterCard(__DIR__ . "/../Stubs/$lang/messages.php");
    }
}
