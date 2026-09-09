<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesUnlockResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
