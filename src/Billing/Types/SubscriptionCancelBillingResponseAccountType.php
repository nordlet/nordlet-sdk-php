<?php

namespace Nordlet\Billing\Types;

enum SubscriptionCancelBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
