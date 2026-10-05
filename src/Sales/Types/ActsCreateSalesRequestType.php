<?php

namespace Nordlet\Sales\Types;

enum ActsCreateSalesRequestType: string
{
    case Goods = "goods";
    case Services = "services";
}
