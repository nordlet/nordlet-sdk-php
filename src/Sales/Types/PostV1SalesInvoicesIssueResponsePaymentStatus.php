<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesIssueResponsePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
