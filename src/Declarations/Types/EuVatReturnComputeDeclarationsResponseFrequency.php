<?php

namespace Nordlet\Declarations\Types;

enum EuVatReturnComputeDeclarationsResponseFrequency: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
