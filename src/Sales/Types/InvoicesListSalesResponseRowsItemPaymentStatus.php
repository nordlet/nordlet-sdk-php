<?php

namespace Nordlet\Sales\Types;

enum InvoicesListSalesResponseRowsItemPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
