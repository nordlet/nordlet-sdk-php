<?php

namespace Nordlet\Billing\Types;

enum AccountGetBillingResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
