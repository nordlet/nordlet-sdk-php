<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesCreateRequestType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
