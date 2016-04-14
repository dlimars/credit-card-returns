<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class Elavon extends BaseAcquirer
{
    protected $name = 'ELAVON';

    /**
     * @param string $messagesFile
     */
    public function __construct($messagesFile = null)
    {
        parent::__construct(include $messagesFile ?: __DIR__ . "/../Messages/pt-BR/elavon.php");
    }
}