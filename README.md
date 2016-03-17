# Retornos de Cartão de Crédito
Códigos de retornos com mensagens das principais adquirentes de cartão de crédito

aceitas no momento:
```php
    REDE    CIELO   ELAVON   STONE
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
