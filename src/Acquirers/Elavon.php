<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class Elavon extends BaseAcquirer
{
    protected $name = 'ELAVON';

    public function __construct()
    {
        parent::__construct(include __DIR__ . "/../Messages/pt-BR/elavon.php");
    }
}