<?php

namespace Nordlet\Billing\Types;

enum AccountSetOverdraftCapBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
