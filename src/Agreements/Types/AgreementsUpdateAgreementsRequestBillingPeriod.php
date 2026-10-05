<?php

namespace Nordlet\Agreements\Types;

enum AgreementsUpdateAgreementsRequestBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
