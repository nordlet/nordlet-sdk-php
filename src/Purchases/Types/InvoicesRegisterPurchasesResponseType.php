<?php

namespace Nordlet\Purchases\Types;

enum InvoicesRegisterPurchasesResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
