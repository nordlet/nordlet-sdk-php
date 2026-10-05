<?php

namespace Nordlet\Sales\Types;

enum InvoicesLockSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
