<?php

namespace Nordlet\Billing\Types;

enum AccountGetBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
