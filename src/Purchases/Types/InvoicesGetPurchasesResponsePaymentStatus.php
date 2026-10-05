<?php

namespace Nordlet\Purchases\Types;

enum InvoicesGetPurchasesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
