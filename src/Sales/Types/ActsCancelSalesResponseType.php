<?php

namespace Nordlet\Sales\Types;

enum ActsCancelSalesResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
