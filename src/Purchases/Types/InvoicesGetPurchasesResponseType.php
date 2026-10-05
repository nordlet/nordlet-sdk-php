<?php

namespace Nordlet\Purchases\Types;

enum InvoicesGetPurchasesResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
