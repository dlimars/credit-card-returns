<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class Stone extends BaseAcquirer
{
    protected $name = 'STONE';

    public function __construct()
    {
        parent::__construct(include __DIR__ . "/../Messages/pt-BR/stone.php");
    }
}