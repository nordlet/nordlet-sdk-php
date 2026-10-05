<?php

namespace Nordlet\Sales\Types;

enum ActsUpdateSalesResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
