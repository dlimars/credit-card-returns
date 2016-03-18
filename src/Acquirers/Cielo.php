<?php

namespace Dlimars\CreditCardReturns\Acquirers;

use Dlimars\CreditCardReturns\Contracts\Acquirer;

class Cielo extends BaseAcquirer
{
    protected $name = 'CIELO';

    /**
     * @param string $messagesFile
     */
    public function __construct($messagesFile = __DIR__ . "/../Messages/pt-BR/cielo.php")
    {
        parent::__construct(include $messagesFile);
    }
}