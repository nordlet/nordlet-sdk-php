<?php

namespace Nordlet\Purchases\Types;

enum OrdersClosePurchasesResponseStatus: string
{
    case Draft = "draft";
    case Submitted = "submitted";
    case Approved = "approved";
    case PartiallyReceived = "partially_received";
    case Received = "received";
    case Closed = "closed";
    case Cancelled = "cancelled";
}
