<?php

namespace Nordlet\Purchases\Types;

enum InvoicesUpdatePurchasesResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
