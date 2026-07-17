<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesGetResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
