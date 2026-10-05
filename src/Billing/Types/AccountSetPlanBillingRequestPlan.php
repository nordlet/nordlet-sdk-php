<?php

namespace Nordlet\Billing\Types;

enum AccountSetPlanBillingRequestPlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
