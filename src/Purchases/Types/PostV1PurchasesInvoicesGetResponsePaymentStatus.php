<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesGetResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
