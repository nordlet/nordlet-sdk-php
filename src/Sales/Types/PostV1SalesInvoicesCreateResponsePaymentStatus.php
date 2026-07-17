<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesCreateResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
