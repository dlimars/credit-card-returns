<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class MasterCard extends BaseAcquirer
{
    protected $name = 'MASTERCARD';

    /**
     * @param string $messagesFile
     */
    public function __construct($messagesFile = null)
    {
        parent::__construct(include $messagesFile ?: __DIR__ . "/../Messages/pt-BR/elavon.php");
    }
}
