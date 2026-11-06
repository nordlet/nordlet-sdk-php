<?php

namespace Nordlet\Billing\Types;

enum FreeSandboxStartBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
