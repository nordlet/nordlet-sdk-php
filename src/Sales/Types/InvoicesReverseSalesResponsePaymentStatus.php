<?php

namespace Nordlet\Sales\Types;

enum InvoicesReverseSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
