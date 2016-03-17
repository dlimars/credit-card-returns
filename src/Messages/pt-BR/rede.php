<?php

use \Dlimars\CreditCardReturns\Message;

return [
    new Message("0", "Transação Aprovada"),
    new Message(["50", "52", "54", "55", "57", "59", "61", "62", "64", "66", "67", "68", "70", "71", "73", "75", "78", "79", "80", "82", "83", "84", "85", "87", "89", "90", "91", "93", "94", "95", "97", "99"], "Transação não autorizada"),
    new Message(["51", "92", "98"], "Estabelecimento Inválido", "Por favor, entre em contato com o estabelecimento que está efetuando a venda."),
    new Message("53", "Transação Inválida", "Por favor, entre em contato com o estabelecimento que está efetuando a venda."),
    new Message(["76, 86"], "Refaça a transação.", "Sua transação não pode ser concluída. Por favor, refaça a transação, dados obrigatórios ausentes."),
    new Message(["58", "63", "65", "69", "72", "77", "96"], "Problemas com o cartão", "Por favor, verifique os dados de seu cartão. Caso o erro persista, entre em contato com a central de"),
    new Message(["56", "60"], "Dado Inválido", "Por favor, entre em contato com o estabelecimento que está efetuando a venda"),
    new Message("74", "Instituição sem comunicação"),
    new Message("1", "JA CONFIRMADA", "A transação já foi confirmada anteriormente"),
    new Message("2", "TRANSAÇÃO NEGADA", "A transação de confirmação foi negada pelo autorizador"),
    new Message("3", "TRANSAÇÃO DESFEITA", "A transação foi desfeita, pois o tempo disponível de dois minutos para confirmação foi ultrapassado"),
    new Message("4", "TRANSAÇÃO ESTORNADA", "A transação foi estornada anteriormente pelo processo de estorno de transação"),
    new Message("8", "DADOS NAO COINCIDEM", "Dados de Total, Número de Comprovante ou Número de Autorização não conferem com o Número de Comprovante e Autorização passados como parâmetro"),
    new Message("9", "TRANSAÇÃO NÃO ENCONTRADA", "Não foi encontrada nenhuma transação para os respectivos campos passados como parâmetro:", "NUMCV, NUMAUTOR e DATA"),
    new Message("88", "DADOS AUSENTES. TRANSAÇÃO NAO PODE SER CONCLUÍDA", "Algum dado obrigatório não foi informado como parâmetro:", "DATA, TRANSACAO, TRANSORIG, TOTAL, PARCELAS, NUMPEDIDO, NUMAUTOR, NUMCV, NUMSQN e FILIACAO")
];