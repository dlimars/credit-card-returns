<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class MercadoPago extends BaseAcquirer
{
    protected $name = 'MERCADO_PAGO';

    /**
     * @param string $messagesFile
     */
    public function __construct($messagesFile = null)
    {
        parent::__construct(include $messagesFile ?: __DIR__ . "/../Messages/pt-BR/mercado-pago.php");
    }
}