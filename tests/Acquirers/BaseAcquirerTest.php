<?php

use Dlimars\CreditCardReturns\Message;

class BaseAcquirerTest extends PHPUnit_Framework_TestCase
{
    public function testLoadMessagesCorrectly()
    {
        $base = new BaseAcquirerStub([new Message("99", "Foo", "Bar", false)]);
        $this->assertCount( 1, $base->getMessages() );
    }
}
