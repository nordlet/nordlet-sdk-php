<?php

namespace Nordlet\Ecommerce\Types;

enum PostV1EcommerceOrdersCreateResponseStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
