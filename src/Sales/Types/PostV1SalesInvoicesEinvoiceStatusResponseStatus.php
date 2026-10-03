<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesEinvoiceStatusResponseStatus: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
