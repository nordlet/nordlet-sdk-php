<?php

namespace Nordlet\Sales\Types;

enum InvoicesCreateSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
