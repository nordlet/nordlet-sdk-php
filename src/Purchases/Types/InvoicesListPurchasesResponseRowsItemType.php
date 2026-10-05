<?php

namespace Nordlet\Purchases\Types;

enum InvoicesListPurchasesResponseRowsItemType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
