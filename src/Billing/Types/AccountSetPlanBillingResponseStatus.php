<?php

namespace Nordlet\Billing\Types;

enum AccountSetPlanBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
