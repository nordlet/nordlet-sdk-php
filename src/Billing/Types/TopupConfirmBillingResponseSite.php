<?php

namespace Nordlet\Billing\Types;

enum TopupConfirmBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
