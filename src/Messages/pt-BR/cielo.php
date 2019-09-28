<?php

use \Dlimars\CreditCardReturns\Message;

return [
    new Message("0", "Transação autorizada"),
    new Message("1", "Transação referida pelo emissor", "Contate o emissor do cartão", false),
    new Message("4", "Cartão com restrição", "Contate o emissor do cartão", false),
    new Message("5", "Transação não autorizada", "Contate o emissor do cartão", false),
    new Message("8", "Código de Verificação inválido", false),
    new Message("6", "Tente novamente", "", true),
    new Message("7", "Cartão com restrição", "", false),
    new Message("12", "Transação inválida", "", false),
    new Message("13", "Valor inválido", "Verifique valor mínimo de R$5,00 para parcelamento", false),
    new Message("14", "Cartão inválido", "", false),
    new Message("15", "Emissor inválido", "", false),
    new Message("41", "Cartão com restrição", "Contate o emissor do cartão", false),
    new Message("51", "Saldo insuficiente", "", true),
    new Message("54", "Cartão vencido", "", false),
    new Message("57", "Transação não permitida", "", false),
    new Message("58", "Transação não permitida", "", false),
    new Message("62", "Cartão com restrição", "Contate o emissor do cartão", false),
    new Message("63", "Cartão com restrição", "Contate o emissor do cartão", false),
    new Message("76", "Tente novamente", "", true),
    new Message("78", "Cartão não foi desbloqueado pelo portador", "", false),
    new Message("82", "Transação inválida", "", false),
    new Message("91", "Banco Indisponível", "", true),
    new Message("96", "Tente Novamente", "", true),
    new Message("AA", "Tente Novamente", "", true),
    new Message("AC", "Cartão de débito tentando utilizar produto crédito", "", false),
    new Message("GA", "Transação referida pela Cielo", "Aguarde contato da Cielo", false),
    new Message("N7", "Código Segurança inválido (Visa)", "", false)
];