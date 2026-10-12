<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesListSalesResponseRowsItemSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
