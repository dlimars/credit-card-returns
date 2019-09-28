<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class PagarMe extends BaseAcquirer
{
    protected $name = 'PAGARME';

    /**
     * @param string $messagesFile
     */
    public function __construct($messagesFile = null)
    {
        parent::__construct(include $messagesFile ?: __DIR__ . "/../Messages/pt-BR/pagarme.php");
    }
}