<?php

namespace Nordlet\Sales\Types;

enum InvoicesListSalesResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
