<?php

namespace Nordlet\Sales\Types;

enum InvoicesEinvoiceSendSalesResponseStatus: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
