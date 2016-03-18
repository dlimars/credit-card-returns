<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class Elavon extends BaseAcquirer
{
    protected $name = 'ELAVON';

    public function __construct($messagesFile = __DIR__ . "/../Messages/pt-BR/elavon.php")
    {
        parent::__construct(include $messagesFile);
    }
}