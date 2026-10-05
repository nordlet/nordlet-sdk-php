<?php

namespace Nordlet\Sales\Types;

enum InvoicesEinvoiceStatusSalesResponseTransport: string
{
    case Bridge = "bridge";
    case Direct = "direct";
}
