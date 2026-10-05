<?php

namespace Nordlet\Inventory\Types;

enum LandedCostsListInventoryResponseRowsItemMethod: string
{
    case ByValue = "by_value";
    case ByQuantity = "by_quantity";
}
