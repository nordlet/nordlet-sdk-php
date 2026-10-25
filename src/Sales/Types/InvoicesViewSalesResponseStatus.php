<?php

namespace Nordlet\Sales\Types;

enum InvoicesViewSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
