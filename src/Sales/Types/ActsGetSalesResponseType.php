<?php

namespace Nordlet\Sales\Types;

enum ActsGetSalesResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
