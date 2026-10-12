<?php

namespace Nordlet\Billing\Types;

enum AccountSetAutoTopUpBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
