<?php

namespace Nordlet\Billing\Types;

enum FreeSandboxStartBillingResponseAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
