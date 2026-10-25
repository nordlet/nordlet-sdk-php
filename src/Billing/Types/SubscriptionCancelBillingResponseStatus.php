<?php

namespace Nordlet\Billing\Types;

enum SubscriptionCancelBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
