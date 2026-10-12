<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesGetSalesResponseSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
