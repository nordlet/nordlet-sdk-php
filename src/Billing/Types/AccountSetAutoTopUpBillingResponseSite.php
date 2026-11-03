<?php

namespace Nordlet\Billing\Types;

enum AccountSetAutoTopUpBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
