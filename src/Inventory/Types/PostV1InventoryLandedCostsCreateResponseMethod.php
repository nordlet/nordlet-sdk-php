<?php

namespace Nordlet\Inventory\Types;

enum PostV1InventoryLandedCostsCreateResponseMethod: string
{
    case ByValue = "by_value";
    case ByQuantity = "by_quantity";
}
