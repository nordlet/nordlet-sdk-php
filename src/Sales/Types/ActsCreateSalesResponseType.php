<?php

namespace Nordlet\Sales\Types;

enum ActsCreateSalesResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
