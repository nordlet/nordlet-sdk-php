<?php

namespace Nordlet\Public_\Types;

enum InvoicesGetPublicResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
