<?php

namespace Nordlet\Sales\Types;

enum InvoicesViewSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
