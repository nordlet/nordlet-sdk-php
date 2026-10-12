<?php

namespace Nordlet\Billing\Types;

enum AccountSetOverdraftCapBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
