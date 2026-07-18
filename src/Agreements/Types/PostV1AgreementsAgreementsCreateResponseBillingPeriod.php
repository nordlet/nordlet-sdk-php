<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsCreateResponseBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
