<?php

namespace Nordlet\Purchases\Types;

enum InvoicesReversePurchasesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
