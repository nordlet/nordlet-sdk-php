<?php

namespace Nordlet\Billing\Types;

enum AccountSetPlanBillingResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
