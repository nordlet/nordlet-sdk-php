<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesUpdateSalesRequestSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
