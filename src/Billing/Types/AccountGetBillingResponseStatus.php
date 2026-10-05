<?php

namespace Nordlet\Billing\Types;

enum AccountGetBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
