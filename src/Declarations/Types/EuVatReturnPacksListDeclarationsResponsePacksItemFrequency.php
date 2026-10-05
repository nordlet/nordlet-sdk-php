<?php

namespace Nordlet\Declarations\Types;

enum EuVatReturnPacksListDeclarationsResponsePacksItemFrequency: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
