<?php

namespace Nordlet\Billing\Types;

enum AccountSetPlanBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
