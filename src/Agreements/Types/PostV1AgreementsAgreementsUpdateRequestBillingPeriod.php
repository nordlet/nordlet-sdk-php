<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsUpdateRequestBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
