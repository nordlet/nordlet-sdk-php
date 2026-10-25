<?php

namespace Nordlet\Billing\Types;

enum FlatRateConfirmBillingResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
    case Invoicing = "invoicing";
}
