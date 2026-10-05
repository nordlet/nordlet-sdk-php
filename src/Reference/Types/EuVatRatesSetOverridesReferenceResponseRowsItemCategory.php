<?php

namespace Nordlet\Reference\Types;

enum EuVatRatesSetOverridesReferenceResponseRowsItemCategory: string
{
    case Standard = "standard";
    case Reduced = "reduced";
    case SuperReduced = "super_reduced";
    case Parking = "parking";
}
