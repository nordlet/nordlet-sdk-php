<?php

namespace Nordlet\Billing\Types;

enum TopupCreateBillingRequestReturnTo: string
{
    case Credits = "credits";
    case Onboarding = "onboarding";
}
