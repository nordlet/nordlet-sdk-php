<?php

namespace Nordlet\Billing\Types;

enum AccountSetAccountTypeBillingRequestAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
