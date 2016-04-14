<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class RedeCard extends BaseAcquirer
{
    protected $name = 'REDE';

    /**
     * @param string $messagesFile
     */
    public function __construct($messagesFile = null)
    {
        parent::__construct(include $messagesFile ?: __DIR__ . "/../Messages/pt-BR/rede.php");
    }
}