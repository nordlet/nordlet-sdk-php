<?php

namespace Nordlet\Purchases\Types;

enum InvoicesListPurchasesResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
