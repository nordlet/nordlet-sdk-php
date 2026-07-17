<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesCreateResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
