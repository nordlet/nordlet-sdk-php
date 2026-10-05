<?php

namespace Nordlet\Agreements\Types;

enum AgreementsCreateAgreementsRequestBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
