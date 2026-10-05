<?php

namespace Nordlet\Agreements\Types;

enum AgreementsListAgreementsResponseRowsItemBillingPeriod: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
