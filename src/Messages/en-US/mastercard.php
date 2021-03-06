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
    new Message("060134", "Card Number must be numeric and valid.", "Card Number must be numeric and valid.", true),
    new Message("060135", "Amount Value must be numeric.",", 	Amount Value must be numeric.", true),
    new Message("060136", "Amount Currency must be valid numeric currency code.", "Amount Currency must be valid numeric currency code.", true),
    new Message("060143", "Card Acceptor Name must be Alpha Characters.", "Card Acceptor Name must be Alpha Characters.", true),
    new Message("060144", "Card Acceptor City must be Alpha Characters.", "Card Acceptor City must be Alpha Characters.", true),
    new Message("060145", "Card Acceptor Postal Code must be in proper format.", "Card Acceptor Postal Code must be in proper format.", true),
    new Message("060151", "Invalid Channel.It must be from .", "Invalid Channel.It must be from .", true),
    new Message("060168", "Payment Pos Entry Mode must be numeric.", "Payment Pos Entry Mode must be numeric.", true),
    new Message("060169", "Card Sequence Number must be numeric.", "Card Sequence Number must be numeric.", true),
    new Message("060170", "POS Card Data Terminal Input Capability Indicator must be numeric.", "POS Card Data Terminal Input Capability Indicator must be numeric.", true),
    new Message("060171", "Payment Initiation Channel must be numeric.", "Payment Initiation Channel must be numeric.", true),
    new Message("060172", "Transaction Fee value must be numeric.", "Transaction Fee value must be numeric.", true),
    new Message("060173", "Transaction Fee Currency Code must be numeric.", "Transaction Fee Currency Code must be numeric.", true),
    new Message("060174", "Additional Sender Information should be Check or Cash.", "Additional Sender Information should be Check or Cash.", true),
    new Message("060175", "Invalid Additional Sender Information", "Additional Sender Information entered is not valid.", true),
    new Message("070013", "Transaction Reference must be 19 characters in length.", "Transaction Reference must be 19 characters in length.", true),
    new Message("070015", "Processor ID must be 10 in length.", "Processor ID must be 10 in length.", true),
    new Message("070016", "Routing and Transit Number must be 9 in length.", "Routing and Transit Number must be 9 in length.", true),
    new Message("070017", "Local Date must be 4 digits in length.", "Local Date must be 4 digits in length.", true),
    new Message("070018", "Local Time must be 6 digits in length.", "Local Time must be 6 digits in length.", true),
    new Message("070021", "ICA must be between 4 and 6 digits in length.", "ICA must be between 4 and 6 digits in length.", true),
    new Message("070031", "Card Acceptor Name must be 1 to 22 characters in length.", "Card Acceptor Name must be 1 to 22 characters in length.",
    new Message("070033", "Merchant Type must be 4 digits in length.", "Merchant Type must be 4 digits in length.",
    new Message("070035", "Card Acceptor City must be 1 to 13 characters in length.", "Card Acceptor City must be 1 to 13 characters in length.",
    new Message("070036", "Card Acceptor State/Province Code must be 2 or 3 characters in length.", "Card Acceptor State/Province Code must be 2 or 3 characters in length.",
    new Message("070037", "Card Acceptor Country must be 3 alpha characters in length.", "Card Acceptor Country must be 3 alpha characters in length.",
    new Message("070038", "Card Acceptor Postal Code must be 1 to 10 in length.", "Card Acceptor Postal Code must be 1 to 10 in length.",
    new Message("070039", "Card Number must be 11 to 19 characters in length.", "Card Number must be 11 to 19 characters in length.",
    new Message("070040", "Amount Value must be between 2 and 12 characters in length.", "Amount Value must be between 2 and 12 characters in length.",
    new Message("070041", "Amount Currency must be 3 digits in length.", "Amount Currency must be 3 digits in length.",
    new Message("070159", "Payment Pos Entry Mode should be 3 digits in length", "Payment Pos Entry Mode should be 3 digits in length.",
    new Message("070160", "Card Sequence Number should be 3 digits in length.", "Card Sequence Number should be 3 digits in length.",
    new Message("070161", "POS Card Data Terminal Input Capability Indicator should be 1 digit in length.", "POS Card Data Terminal Input Capability Indicator should be 1 digit in length.",
    new Message("070162", "Integrated Circuit Card (ICC) System-Related Data should not be more than 255 characters in length.", "Integrated Circuit Card (ICC) System-Related Data should not be more than 255 characters in length.",
    new Message("070163", "Payment Initiation Channel should be 2 digits in length.", "Payment Initiation Channel should be 2 digits in length.",
    new Message("070164", "Transaction Fee value should be between 1 and 8 digits in length", "Transaction Fee value should be between 1 and 8 digits in length.",
    new Message("070165", "Transaction Fee Currency Code should be 3 digits in length.", "Transaction Fee Currency Code should be 3 digits in length.",
    new Message("070166", "Additional Sender Information must be within 65 characters in length.", "Additional Sender Information must be within 65 characters in length.",
    new Message("070167", "Receiver Track 2 Data must be within 37 characters in length", "Receiver Track 2 Data must be within 37 characters in length.",
    new Message("080139", "Invalid Channel", "Invalid Channel", false),
    new Message("080140", "Support UCAF is not allowed for the channel.", "Support UCAF is not allowed for the channel.", false),
    new Message("080143", "Amount Value must be greater than zero.", "Amount Value must be greater than zero.", true),
    new Message("080145", "Merchant Type must be 6532 or 6533", "Merchant Type must be 6532 or 6533", true),
    new Message("080148", "Duplicate Request.", "Duplicate Request.", false),
    new Message("080149", "Duplicate Transaction Reference Number.", "Duplicate Transaction Reference Number.", false),
    new Message("080150", "ICA and Transaction Reference Number are invalid.", "ICA and Transaction Reference Number are invalid.", true),
    new Message("080155", "Processor ID must be numeric.", "Processor ID must be numeric.", true),
    new Message("080157", "Amount Currency is not supported.", "Amount Currency is not supported.", false),
    new Message("080169", "Invalid Payment Pos Entry Mode.", "Invalid Payment Pos Entry Mode.", false),
    new Message("080170", "Invalid Card Sequence Number.", "Invalid Card Sequence Number.", true),
    new Message("080171", "Invalid POS Card Data Terminal Input Capability Indicator.", "Invalid POS Card Data Terminal Input Capability Indicator.", false),
    new Message("080172", "Transaction Fee Value must be greater than zero.", "Transaction Fee Value must be greater than zero.", true),
    new Message("080173", "Transaction Fee Currency Code is not supported.", "Transaction Fee Currency Code is not supported.", true),
    new Message("080174", "Payment Pos Entry Mode should starts with 05 or 07 when Integrated Circuit Card (ICC) System-Related Data is available.", "Payment Pos Entry Mode should starts with 05 or 07 when Integrated Circuit Card (ICC) System-Related Data is available.", true),
    new Message("090103", "ICA is required.", "ICA is required", true),
    new Message("090124", "Card Acceptor State/Province Code is required", "Card Acceptor State/Province Code is required", true),
    new Message("090128", "Transaction Reference is required.", "Transaction Reference is required.", true),
    new Message("090130", "Processor ID required.", "Processor ID required.", true),
    new Message("090131", "Routing and Transit Number is required.", "Routing and Transit Number is required.", true),
    new Message("090132", "Local Date is required.", "Local Date is required.", true),
    new Message("090133", "Local Time is required.", "Local Time is required.", true),
    new Message("090135", "Card Acceptor is required.", "Card Acceptor is required.", true),
    new Message("090136", "Card Acceptor Name must be 1 to 22 characters in length.", "Card Acceptor Name must be 1 to 22 characters in length.", true),
    new Message("090138", "Merchant Type is required.", "Merchant Type is required.", true),
    new Message("090139", "Channel is required.", "Channel is required.", true),
    new Message("090140", "Card Acceptor City is required.", "Card Acceptor City is required.", true),
    new Message("090141", "Card Acceptor Country is required.", "Card Acceptor Country is required.", true),
    new Message("090142", "Card Number is required.", "Card Number is required.", true),
    new Message("090143", "Amount Value is required.", "Amount Value is required.", true),
    new Message("090144", "Amount Currency is required.", "Amount Currency is required.", true),
    new Message("090184", "Transaction Fee value is required.", "Transaction Fee value is required.", true),
    new Message("090185", "Transaction Fee Currency Code is required.", "Transaction Fee Currency Code is required.", true),
    new Message("090187", "POS Card Data Terminal Input Capability Indicator must be present when Payment Pos entry mode value starts with 05 or 07 or 91.", 	"POS Card Data Terminal Input Capability Indicator must be present when Payment Pos entry mode value starts with 05 or 07 or 91.", true),
    new Message("090189", "Receiver Track 2 data must be present for Payment Pos Entry Mode other than 010 or 011 or 012.", "Receiver Track 2 data must be present for Payment Pos Entry Mode other than 010 or 011 or 012.", true)
];

/*
 * Oficial information: https://developer.mastercard.com/portal/display/api/MasterCard+rePower+-+Error+Codes
 */