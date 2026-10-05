<?php

namespace Nordlet\Sales\Types;

enum InvoicesUnlockSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
