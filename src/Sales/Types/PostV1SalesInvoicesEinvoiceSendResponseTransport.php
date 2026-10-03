<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesEinvoiceSendResponseTransport: string
{
    case Bridge = "bridge";
    case Direct = "direct";
}
