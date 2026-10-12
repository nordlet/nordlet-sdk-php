<?php

namespace Nordlet\Billing\Types;

enum AccountGetBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
