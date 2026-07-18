<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsUpdateResponseBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
