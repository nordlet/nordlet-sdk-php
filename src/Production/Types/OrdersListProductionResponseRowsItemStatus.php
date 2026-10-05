<?php

namespace Nordlet\Production\Types;

enum OrdersListProductionResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
}
