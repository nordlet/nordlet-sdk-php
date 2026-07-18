<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsCreateRequestBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
