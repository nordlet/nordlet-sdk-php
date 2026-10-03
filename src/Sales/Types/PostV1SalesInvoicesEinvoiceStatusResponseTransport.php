<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesEinvoiceStatusResponseTransport: string
{
    case Bridge = "bridge";
    case Direct = "direct";
}
