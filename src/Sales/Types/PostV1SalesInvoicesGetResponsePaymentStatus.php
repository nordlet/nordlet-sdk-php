<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesGetResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
