<?php

namespace Nordlet\Billing\Types;

enum FlatRateConfirmBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
