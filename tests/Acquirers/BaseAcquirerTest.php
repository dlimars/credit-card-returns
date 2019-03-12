<?php

use Dlimars\CreditCardReturns\Message;

class BaseAcquirerTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $base = new BaseAcquirerStub([new Message("99", "Foo", "Bar", false)]);
        $this->assertCount( 1, $base->getMessages() );
    }

    public function testGetMessageStringCode()
    {
        $messages = [
            new Message("FOO-1", "Foo1", "Bar1", false),
            new Message("FOO-2", "Foo2", "Bar2", false)
        ];
        $base       = new BaseAcquirerStub($messages);
        $message    = $base->getMessageByCode("FOO-2", false)->getMessage();
        $this->assertEquals("Foo2", $message);
    }

    public function testGetMessageIntegerCode()
    {
        $messages = [
            new Message("1", "Foo1", "Bar1", false),
            new Message("2", "Foo2", "Bar2", false)
        ];
        $base       = new BaseAcquirerStub($messages);
        $message    = $base->getMessageByCode("FOO-2")->getMessage();
        $this->assertEquals("Foo2", $message);
    }
}
