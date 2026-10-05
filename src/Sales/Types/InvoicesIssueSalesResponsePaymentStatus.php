<?php

namespace Nordlet\Sales\Types;

enum InvoicesIssueSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
