<?php

namespace Nordlet\Sales\Types;

enum ActsUpdateSalesRequestType: string
{
    case Goods = "goods";
    case Services = "services";
}
