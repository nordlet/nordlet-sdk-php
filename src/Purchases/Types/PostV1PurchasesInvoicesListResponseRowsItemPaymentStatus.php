<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesListResponseRowsItemPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
