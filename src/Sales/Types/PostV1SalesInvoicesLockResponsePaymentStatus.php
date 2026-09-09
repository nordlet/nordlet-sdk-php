<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesLockResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
