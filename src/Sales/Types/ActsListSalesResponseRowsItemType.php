<?php

namespace Nordlet\Sales\Types;

enum ActsListSalesResponseRowsItemType: string
{
    case Goods = "goods";
    case Services = "services";
}
