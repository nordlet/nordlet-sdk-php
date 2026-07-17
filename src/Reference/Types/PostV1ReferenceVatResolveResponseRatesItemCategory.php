<?php

namespace Nordlet\Reference\Types;

enum PostV1ReferenceVatResolveResponseRatesItemCategory: string
{
    case Standard = "standard";
    case Reduced = "reduced";
    case SuperReduced = "super_reduced";
    case Parking = "parking";
}
