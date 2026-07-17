<?php

namespace Nordlet\Inventory\Types;

enum PostV1InventorySettingsGetResponseNegativeStockPolicy: string
{
    case Reject = "reject";
    case Allow = "allow";
}
