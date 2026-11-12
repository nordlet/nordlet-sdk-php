<?php

namespace Nordlet\Purchases\Types;

enum InvoicesReversePurchasesResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
