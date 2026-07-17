<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesRegisterResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
