<?php

namespace Nordlet\Sales\Types;

enum InvoicesEinvoiceStatusSalesResponseStatus: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
