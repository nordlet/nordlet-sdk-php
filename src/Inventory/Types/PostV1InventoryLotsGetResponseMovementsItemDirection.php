<?php

namespace Nordlet\Inventory\Types;

enum PostV1InventoryLotsGetResponseMovementsItemDirection: string
{
    case In = "in";
    case Out = "out";
}
