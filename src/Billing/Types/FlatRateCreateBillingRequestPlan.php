<?php

namespace Nordlet\Billing\Types;

enum FlatRateCreateBillingRequestPlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
