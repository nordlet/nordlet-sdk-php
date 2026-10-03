<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesEinvoiceSendResponseStatus: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
