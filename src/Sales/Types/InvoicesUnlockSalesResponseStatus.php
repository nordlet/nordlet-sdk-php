<?php

namespace Nordlet\Sales\Types;

enum InvoicesUnlockSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
