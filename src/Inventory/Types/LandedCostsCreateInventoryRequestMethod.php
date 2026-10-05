<?php

namespace Nordlet\Inventory\Types;

enum LandedCostsCreateInventoryRequestMethod: string
{
    case ByValue = "by_value";
    case ByQuantity = "by_quantity";
}
