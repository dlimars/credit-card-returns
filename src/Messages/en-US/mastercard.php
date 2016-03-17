<?php

use \Dlimars\CreditCardReturns\Message;

return [
    new Message("020000", "Client does not have permission to invoke service for ICA.", "Business partner must be configured to send transactions for ICA.", false),    
    new Message("020001", "Client does not have permission to invoke the service.", "Business partner must be configured to send transactions for ICA.", false),
    new Message("060101", "ICA must be numeric.", "ICA must contain digits 0-9", true),
    new Message("060102", "MoneySend Transaction Reference must be numeric.", "MoneySend Transaction Reference", true),
    new Message("060104", "Amount must be numeric and valid.", "Amount is numeric", true),
    new Message("060105", "Currency code must be numeric.", "Currency Code is numeric", true),
    new Message("060106", "Local Date must be numeric.", "Local Date is numeric", true),
    new Message("060107", "Local Time must be numeric.", "Local Time is numeric", true),
    new Message("060108", "Processor ID must be numeric.", "Processor ID is numeric", true),
    new Message("060109", "Routing and Transit Number must be numeric.", "Routing & Transit Number is numeric", true),
    new Message("060119", "Local Date must be in the format of MMdd.", "Local Date must be in the format of MMdd.", true),
    new Message("060120", "Local Time must be the format of HHmmss.", "Local Time must be the format of HHmmss.", true),
    new Message("060132", "Card Acceptor State/Province Code must be 2 or 3 characters.", "Card Acceptor State/Province Code must be 2 or 3 characters.", true),
    new Message("060133", "Card Acceptor Country must be a valid alpha country code.", "Card Acceptor Country must be a valid alpha country code.", true),
    new Message("060134", "Card Number must be numeric and valid.", "Card Number must be numeric and valid.", true)
];

/*
 * Oficial information: https://developer.mastercard.com/portal/display/api/MasterCard+rePower+-+Error+Codes
 */