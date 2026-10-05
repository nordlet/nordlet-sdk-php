<?php

namespace Nordlet\Inventory\Types;

enum LandedCostsCreateInventoryResponseMethod: string
{
    case ByValue = "by_value";
    case ByQuantity = "by_quantity";
}
