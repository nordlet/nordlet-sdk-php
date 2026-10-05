<?php

namespace Nordlet\Inventory\Types;

enum SettingsGetInventoryResponseNegativeStockPolicy: string
{
    case Reject = "reject";
    case Allow = "allow";
}
