<?php

namespace Nordlet\Ecommerce\Types;

enum OrdersReserveEcommerceResponseStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
