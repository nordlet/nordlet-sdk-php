<?php

namespace Nordlet\Purchases\Types;

enum InvoicesUpdatePurchasesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
