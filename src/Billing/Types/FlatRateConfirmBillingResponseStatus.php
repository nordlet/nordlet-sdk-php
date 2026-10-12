<?php

namespace Nordlet\Billing\Types;

enum FlatRateConfirmBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
