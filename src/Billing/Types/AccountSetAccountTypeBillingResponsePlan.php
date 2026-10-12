<?php

namespace Nordlet\Billing\Types;

enum AccountSetAccountTypeBillingResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
