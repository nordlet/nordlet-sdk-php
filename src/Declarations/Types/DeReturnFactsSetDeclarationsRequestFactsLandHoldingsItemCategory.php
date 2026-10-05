<?php

namespace Nordlet\Declarations\Types;

enum DeReturnFactsSetDeclarationsRequestFactsLandHoldingsItemCategory: string
{
    case RentalEast = "rental_east";
    case BusinessEast = "business_east";
    case MixedEast = "mixed_east";
    case UndevelopedEast = "undeveloped_east";
    case Other = "other";
    case Agricultural = "agricultural";
}
