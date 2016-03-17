<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class Cielo extends BaseAcquirer
{
    protected $name = 'CIELO';

    public function __construct()
    {
        parent::__construct(include __DIR__ . "/../Messages/pt-BR/cielo.php");
    }
}