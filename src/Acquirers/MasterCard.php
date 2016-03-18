<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class MasterCard extends BaseAcquirer
{
    protected $name = 'MASTERCARD';

    public function __construct($messagesFile = __DIR__ . "/../Messages/en-US/mastercard.php")
    {
        parent::__construct(include $messagesFile);
    }
}
