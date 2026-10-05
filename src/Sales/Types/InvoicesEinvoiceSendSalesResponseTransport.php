<?php

namespace Nordlet\Sales\Types;

enum InvoicesEinvoiceSendSalesResponseTransport: string
{
    case Bridge = "bridge";
    case Direct = "direct";
}
