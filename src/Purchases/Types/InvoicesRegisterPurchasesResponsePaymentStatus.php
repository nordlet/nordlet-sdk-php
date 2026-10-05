<?php

namespace Nordlet\Purchases\Types;

enum InvoicesRegisterPurchasesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
