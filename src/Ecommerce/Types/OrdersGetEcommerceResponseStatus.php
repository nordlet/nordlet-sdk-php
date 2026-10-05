<?php

namespace Nordlet\Ecommerce\Types;

enum OrdersGetEcommerceResponseStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
