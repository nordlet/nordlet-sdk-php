<?php

namespace Nordlet\Billing\Types;

enum AccountSetAutoTopUpBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
