<?php

namespace Nordlet\Billing\Types;

enum TopupConfirmBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
