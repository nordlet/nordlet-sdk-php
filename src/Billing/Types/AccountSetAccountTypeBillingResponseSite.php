<?php

namespace Nordlet\Billing\Types;

enum AccountSetAccountTypeBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
