<?php

namespace Nordlet\Ecommerce\Types;

enum PostV1EcommerceOrdersReserveResponseStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
