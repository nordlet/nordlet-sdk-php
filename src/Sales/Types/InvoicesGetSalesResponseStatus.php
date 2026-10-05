<?php

namespace Nordlet\Sales\Types;

enum InvoicesGetSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
