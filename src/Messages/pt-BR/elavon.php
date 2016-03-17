<?php

use \Dlimars\CreditCardReturns\Message;

return [
    new Message("AA", "Transação processada com sucesso", "Aprovada"),
    new Message("ND", "Transação recusada", "", true),
    new Message("PP", "Transação com processamento pendente", "Ex: Cancelamento, estorno"),
    new Message("E0", "Recusada", "Estrutura de mensagem inválida", true),
    new Message("E1", "Recusada", "Credenciais de afiliação inválidas"),
    new Message("E2", "Recusada", "Afiliação inválida"),
    new Message("E3", "Recusada", "Transação não foi encontrada", true),
    new Message("E4", "Recusada", "Transação duplicada"),
    new Message("E5", "Recusada", "Tipo de transação não suportado ou disponível/habilitado para sua afiliação"),
    new Message("E6", "Recusada", "Inconsistência/ Valor inválido/ Fora dos padrões"),
    new Message("E7", "Recusada", "Status da transação não permite operação requerida", true),
    new Message("E8", "Recusada", "Campos obrigatórios faltando, verificar o preenchimento do CVV"),
    new Message("EX", "Pedido expirado", "Pedido para esse tipo de transação foi expirado"),
    new Message("UE", "Erro inesperado", "Ex: Captura expirada", true),
    new Message("SU", "Sistema temporariamente indisponível, Se persistir, contate a Elavon", true),
    new Message("TO", "Tempo ultrapassado", "Se persistir, contate a Elavon", true)
];