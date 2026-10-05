<?php

namespace Nordlet\Ecommerce\Types;

enum OrdersListEcommerceResponseRowsItemStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
