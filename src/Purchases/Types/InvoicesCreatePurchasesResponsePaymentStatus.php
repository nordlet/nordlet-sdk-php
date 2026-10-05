<?php

namespace Nordlet\Purchases\Types;

enum InvoicesCreatePurchasesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
