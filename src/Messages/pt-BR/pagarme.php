<?php

use \Dlimars\CreditCardReturns\Message;

return [
    new Message("acquirer", "Transação não autorizada pela operadora do cartão"),
    new Message("antifraud", "Transação não autorizada por motivos de segurança"),
    new Message("internal_error", "Transação com erro"),
    new Message("no_acquirer", "Transação com erro, nenhuma adquirente disponível"),
    new Message("acquirer_timeout", "Tempo da processamento esgotado")
];
