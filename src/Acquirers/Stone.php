<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class Stone extends BaseAcquirer
{
    protected $name = 'STONE';

    /**
     * @param string $messagesFile
     */
    public function __construct($messagesFile = null)
    {
        parent::__construct(include $messagesFile ?: __DIR__ . "/../Messages/pt-BR/stone.php");
    }
}