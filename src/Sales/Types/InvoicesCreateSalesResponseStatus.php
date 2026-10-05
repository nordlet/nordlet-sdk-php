<?php

namespace Nordlet\Sales\Types;

enum InvoicesCreateSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
