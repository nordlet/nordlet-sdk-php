<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesCreateSalesResponseSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
