<?php

namespace Nordlet\Sales\Types;

enum InvoicesApplyAdvanceSalesResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
