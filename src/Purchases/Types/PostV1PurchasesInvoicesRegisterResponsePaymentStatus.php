<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesRegisterResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
