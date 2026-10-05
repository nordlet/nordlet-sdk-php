<?php

namespace Nordlet\Sales\Types;

enum InvoicesGetSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
