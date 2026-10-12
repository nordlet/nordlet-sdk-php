<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesCreateSalesRequestSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
