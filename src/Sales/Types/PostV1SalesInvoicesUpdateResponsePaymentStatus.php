<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesUpdateResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
