<?php

namespace Nordlet\Inventory\Types;

enum StockMovementsListInventoryResponseRowsItemDirection: string
{
    case In = "in";
    case Out = "out";
}
