<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class RedeCard extends BaseAcquirer
{
    protected $name = 'REDE';

    public function __construct()
    {
        parent::__construct(include __DIR__ . "/../Messages/pt-BR/rede.php");
    }
}