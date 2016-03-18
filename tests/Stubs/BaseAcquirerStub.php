<?php

use Dlimars\CreditCardReturns\Acquirers\BaseAcquirer;

class BaseAcquirerStub extends BaseAcquirer
{
    public function __construct($messages = [])
    {
        parent::__construct($messages);
    }
}