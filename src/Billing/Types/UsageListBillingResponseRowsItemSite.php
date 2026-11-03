<?php

namespace Nordlet\Billing\Types;

enum UsageListBillingResponseRowsItemSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
