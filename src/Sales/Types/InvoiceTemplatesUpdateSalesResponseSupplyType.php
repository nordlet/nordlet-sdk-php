<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesUpdateSalesResponseSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
