<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesListResponseRowsItemType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
