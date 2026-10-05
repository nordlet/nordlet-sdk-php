<?php

namespace Nordlet\Agreements\Types;

enum AgreementsCreateAgreementsResponseBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
