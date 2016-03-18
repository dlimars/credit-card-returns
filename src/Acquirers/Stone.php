<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class Stone extends BaseAcquirer
{
    protected $name = 'STONE';

    public function __construct($messagesFile = __DIR__ . "/../Messages/pt-BR/stone.php")
    {
        parent::__construct(include $messagesFile);
    }
}