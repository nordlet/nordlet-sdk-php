<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesUpdateResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
