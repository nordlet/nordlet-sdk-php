<?php

namespace Nordlet\Agreements\Types;

enum AgreementsUpdateAgreementsResponseBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
