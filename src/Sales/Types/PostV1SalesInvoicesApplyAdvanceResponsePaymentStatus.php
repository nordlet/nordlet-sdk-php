<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesApplyAdvanceResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
