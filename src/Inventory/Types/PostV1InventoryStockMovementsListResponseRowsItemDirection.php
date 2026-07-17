<?php

namespace Nordlet\Inventory\Types;

enum PostV1InventoryStockMovementsListResponseRowsItemDirection: string
{
    case In = "in";
    case Out = "out";
}
