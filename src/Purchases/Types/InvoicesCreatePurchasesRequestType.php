<?php

namespace Nordlet\Purchases\Types;

enum InvoicesCreatePurchasesRequestType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
