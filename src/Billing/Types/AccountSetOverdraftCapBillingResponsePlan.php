<?php

namespace Nordlet\Billing\Types;

enum AccountSetOverdraftCapBillingResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
