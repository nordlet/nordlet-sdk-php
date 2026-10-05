<?php

namespace Nordlet\Inventory\Types;

enum SettingsUpdateInventoryRequestNegativeStockPolicy: string
{
    case Reject = "reject";
    case Allow = "allow";
}
