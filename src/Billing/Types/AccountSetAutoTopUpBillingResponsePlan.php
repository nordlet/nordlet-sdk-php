<?php

namespace Nordlet\Billing\Types;

enum AccountSetAutoTopUpBillingResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
    case Invoicing = "invoicing";
}
