<?php

namespace Nordlet\Inventory\Types;

enum LotsGetInventoryResponseMovementsItemDirection: string
{
    case In = "in";
    case Out = "out";
}
