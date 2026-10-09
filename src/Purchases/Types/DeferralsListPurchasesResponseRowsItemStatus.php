<?php

namespace Nordlet\Purchases\Types;

enum DeferralsListPurchasesResponseRowsItemStatus: string
{
    case Pending = "pending";
    case Posted = "posted";
    case Cancelled = "cancelled";
}
