<?php

namespace Nordlet\Billing\Types;

enum AccountSetAccountTypeBillingResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
