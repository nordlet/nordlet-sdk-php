<?php

namespace Nordlet\Ecommerce\Types;

enum OrdersCreateEcommerceResponseStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
