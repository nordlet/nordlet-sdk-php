<?php

namespace Nordlet\Account\Types;

enum PostV1AccountCompaniesCreateRequestVatPeriod: string
{
    case Monthly = "monthly";
    case Bimonthly = "bimonthly";
    case Quarterly = "quarterly";
    case Semiannual = "semiannual";
    case Annual = "annual";
}
