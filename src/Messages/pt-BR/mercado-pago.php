<?php

use \Dlimars\CreditCardReturns\Message;

return [
    new Message("accredited", "Pronto, seu pagamento foi aprovado!"),
    new Message("pending_contingency", "Estamos processando o pagamento. Em até 2 dias úteis informaremos por e-mail o resultado."),
    new Message("pending_review_manual", "Estamos processando o pagamento. Em até 2 dias úteis informaremos por e-mail se foi aprovado ou se precisamos de mais informações."),
    new Message("cc_rejected_bad_filled_card_number", "Confira o número do cartão."),
    new Message("cc_rejected_bad_filled_date", "Confira a data de validade."),
    new Message("cc_rejected_bad_filled_other", "Confira os dados informados."),
    new Message("cc_rejected_bad_filled_security_code", "Confira o código de segurança."),
    new Message("cc_rejected_blacklist", "Não conseguimos processar seu pagamento."),
    new Message("cc_rejected_call_for_authorize", "Você deve autorizar a bandeira do seu cartão o pagamento do valor ao Mercado Pago."),
    new Message("cc_rejected_card_disabled", "Cartão não desbloqueado, ligue para a bandeira do seu cartão para ativá-lo. O telefone encontra-se no verso."),
    new Message("cc_rejected_card_error", "Não conseguimos processar seu pagamento."),
    new Message("cc_rejected_duplicated_payment", "Você já efetuou um pagamento com esse valor. Caso precise pagar novamente, utilize outro cartão ou outra forma de pagamento."),
    new Message("cc_rejected_high_risk", "Seu pagamento foi recusado. Escolha outra forma de pagamento."),
    new Message("cc_rejected_insufficient_amount", "Saldo insuficiente."),
    new Message("cc_rejected_invalid_installments", "A bandeira do seu cartão não processa pagamentos parcelados."),
    new Message("cc_rejected_max_attempts", "Você atingiu o limite de tentativas permitido. Escolha outro cartão ou outra forma de pagamento."),
    new Message("cc_rejected_other_reason", "A bandeira do seu cartão não processou seu pagamento.")
];