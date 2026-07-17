<?php

namespace Nordlet\Inventory\Types;

enum PostV1InventorySettingsUpdateRequestNegativeStockPolicy: string
{
    case Reject = "reject";
    case Allow = "allow";
}
