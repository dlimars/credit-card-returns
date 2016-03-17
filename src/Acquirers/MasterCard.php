<?php

namespace Dlimars\CreditCardReturns\Acquirers;

class MasterCard extends BaseAcquirer
{
    protected $name = 'MASTERCARD';

    public function __construct()
    {
        if (! $file = realpath(__DIR__ . "/../Messages/" . \Locale::getDefault() . "/mastercard.php")) {
            throw new Exception("Your language is not available at the moment, please select another one.", 1);
        } else {
            parent::__construct(include $file);
        }
    }
}