<?php

namespace Nordlet\Billing\Types;

enum AccountSetPlanBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
