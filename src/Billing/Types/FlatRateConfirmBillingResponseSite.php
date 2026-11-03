<?php

namespace Nordlet\Billing\Types;

enum FlatRateConfirmBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
