<?php

use \Dlimars\CreditCardReturns\Message;

return [
    new Message("0001", "Transação autorizada"),
    new Message("1000", "Transação autoriada", "Verifique a identidade antes de autorizar"),
    new Message("1000", "Transação não autorizada"),
    new Message("1001", "Cartão vencido"),
    new Message("1002", "Transação não permitida"),
    new Message("1003", "Rejeitado emissor", "Entre em contato com o banco emissor do cartão"),
    new Message("1004", "Cartão com restrição", "Entre em contato com o banco emissor do cartão"),
    new Message("1005", "Transação não autorizada"),
    new Message("1006", "Tentativas de senha excedidas"),
    new Message("1007", "Rejeitado emissor", "Entre em contato com o banco emissor do cartão"),
    new Message("1008", "Rejeitado emissor", "Entre em contato com o banco emissor do cartão"),
    new Message("1009", "Transação não autorizada"),
    new Message("1010", "Valor inválido"),
    new Message("1011", "Cartão inválido"),
    new Message("1013", "Transação não autorizada"),
    new Message("1014", "Tipo de conta inválido", "O tipo de conta selecionado não existe. Ex: uma transação de crédito com um cartão de débito"),
    new Message("1016", "Saldo insuficiente", "", true),
    new Message("1017", "Senha inválida", "", true),
    new Message("1019", "Transação não permitida"),
    new Message("1020", "Transação não permitida"),
    new Message("1021", "Rejeitado emissor", "Entre em contato com o banco emissor do cartão"),
    new Message("1022", "Cartão com restrição"),
    new Message("1023", "Rejeitado emissor", "Entre em contato com o banco emissor do cartão"),
    new Message("1024", "Transação não permitida"),
    new Message("1025", "Cartão bloqueado", "Entre em contato com o banco emissor do cartão"),
    new Message("1042", "Tipo de conta inválido", "O tipo de conta selecionado não existe. Ex: uma transação de crédito com um cartão de débito"),
    new Message("1045", "Código de segurança inválido", "", true),
    new Message("2000", "Cartão com restrição"),
    new Message("2001", "Cartão vencido"),
    new Message("2002", "Transação não permitida"),
    new Message("2003", "Rejeitado emissor", "Entre em contato com o banco emissor do cartão."),
    new Message("2004", "Cartão com restrição", "Entre em contato com o banco emissor do cartão"),
    new Message("2005", "Transação não autorizada"),
    new Message("2006", "Tentativas de senha excedidas"),
    new Message("2007", "Cartão com restrição"),
    new Message("2008", "Cartão com restrição"),
    new Message("2009", "Cartão com restrição"),
    new Message("9102", "Transação inválida"),
    new Message("9108", "Erro no processamento", "", true),
    new Message("9109", "Erro no processamento", "", true),
    new Message("9111", "Time-out na transação", "", true),
    new Message("9112", "Emissor indisponível", "", true),
    new Message("9999", "Erro não especificado")
];