<?php

namespace Nordlet\Account\Types;

enum MeAccountResponseBillingAccountType: string
{
    case FlatRate = "flat_rate";
    case PerRequest = "per_request";
}
