<?php

namespace Nordlet\Purchases\Types;

enum InvoicesListPurchasesResponseRowsItemPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
