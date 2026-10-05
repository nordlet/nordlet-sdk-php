<?php

namespace Nordlet\Account\Types;

enum MeAccountResponseBillingStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
