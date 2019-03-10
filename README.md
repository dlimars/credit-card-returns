# Retornos de Cartão de Crédito

[![Build Status](https://travis-ci.org/dlimars/credit-card-returns.svg?branch=master)](https://travis-ci.org/dlimars/credit-card-returns)
[![Latest Stable Version](https://poser.pugx.org/dlimars/credit-card-returns/v/stable)](https://packagist.org/packages/dlimars/credit-card-returns)
[![Total Downloads](https://poser.pugx.org/dlimars/credit-card-returns/downloads)](https://packagist.org/packages/dlimars/credit-card-returns)
[![Latest Unstable Version](https://poser.pugx.org/dlimars/credit-card-returns/v/unstable)](https://packagist.org/packages/dlimars/credit-card-returns)
[![License](https://poser.pugx.org/dlimars/credit-card-returns/license)](https://packagist.org/packages/dlimars/credit-card-returns)

Códigos de retornos com mensagens das principais adquirentes de cartão de crédito

aceitas no momento:
```php
    REDE    CIELO   ELAVON   STONE   MASTERCARD   MERCADO_PAGO
```

### Instalação
apenas execute `composer require dlimars/credit-card-returns` na pasta do seu projeto


### Como usar
exemplos de uso:

```php
    <?php

    require "vendor/autoload.php";

    use Dlimars\CreditCardReturns\Acquirers\Cielo;

    $cielo = (new Cielo())->getMessageByCode(51)->getMessage();
    // Irá exibir "Saldo insuficiente"

    // para utilizar as demais adquirentes:
    use Dlimars\CreditCardReturns\Acquirers\Stone;
    use Dlimars\CreditCardReturns\Acquirers\RedeCard;
    use Dlimars\CreditCardReturns\Acquirers\Elavon;

    $stone  = (new Stone())->getMessageByCode(51)->getMessage();
    $rede   = (new RedeCard())->getMessageByCode(51)->getMessage();
    $elavon = (new Elavon())->getMessageByCode(51)->getMessage();
```
