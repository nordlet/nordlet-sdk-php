<?php

namespace Nordlet\Inventory\Types;

enum StockMovementsListInventoryRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
