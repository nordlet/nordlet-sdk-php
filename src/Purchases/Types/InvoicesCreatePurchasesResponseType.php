<?php

namespace Nordlet\Purchases\Types;

enum InvoicesCreatePurchasesResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
