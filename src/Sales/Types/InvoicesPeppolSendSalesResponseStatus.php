<?php

namespace Nordlet\Sales\Types;

enum InvoicesPeppolSendSalesResponseStatus: string
{
    case Pending = "pending";
    case Delivered = "delivered";
    case Rejected = "rejected";
    case Failed = "failed";
}
