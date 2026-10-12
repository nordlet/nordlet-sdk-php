<?php

namespace Nordlet\Billing\Types;

enum TopupConfirmBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
