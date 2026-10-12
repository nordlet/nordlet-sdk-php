<?php

namespace Nordlet\Billing\Types;

enum AccountSetAccountTypeBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
