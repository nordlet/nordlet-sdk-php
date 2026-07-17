<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesListResponseRowsItemPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
