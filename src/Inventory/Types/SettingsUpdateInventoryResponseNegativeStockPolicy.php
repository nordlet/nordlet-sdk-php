<?php

namespace Nordlet\Inventory\Types;

enum SettingsUpdateInventoryResponseNegativeStockPolicy: string
{
    case Reject = "reject";
    case Allow = "allow";
}
