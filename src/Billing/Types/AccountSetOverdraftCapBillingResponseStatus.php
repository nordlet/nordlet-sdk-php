<?php

namespace Nordlet\Billing\Types;

enum AccountSetOverdraftCapBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
