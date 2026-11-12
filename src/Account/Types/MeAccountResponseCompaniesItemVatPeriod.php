<?php

namespace Nordlet\Account\Types;

enum MeAccountResponseCompaniesItemVatPeriod: string
{
    case Monthly = "monthly";
    case Bimonthly = "bimonthly";
    case Quarterly = "quarterly";
    case Semiannual = "semiannual";
    case Annual = "annual";
}
