<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsGetResponseBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
