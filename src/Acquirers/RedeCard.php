<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class RedeCard extends BaseAcquirer
{
    protected $name = 'REDE';

    public function __construct($messagesFile = __DIR__ . "/../Messages/pt-BR/rede.php")
    {
        parent::__construct(include $messagesFile);
    }
}