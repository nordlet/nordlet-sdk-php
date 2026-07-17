<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsListResponseRowsItemType: string
{
    case Goods = "goods";
    case Services = "services";
}
