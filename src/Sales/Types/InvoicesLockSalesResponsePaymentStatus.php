<?php

namespace Nordlet\Sales\Types;

enum InvoicesLockSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
