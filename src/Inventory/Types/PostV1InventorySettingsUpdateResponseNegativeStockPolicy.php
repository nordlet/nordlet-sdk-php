<?php

namespace Nordlet\Inventory\Types;

enum PostV1InventorySettingsUpdateResponseNegativeStockPolicy: string
{
    case Reject = "reject";
    case Allow = "allow";
}
