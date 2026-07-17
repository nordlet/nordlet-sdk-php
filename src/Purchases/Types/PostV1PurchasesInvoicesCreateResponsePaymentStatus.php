<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesCreateResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
