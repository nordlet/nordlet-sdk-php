<?php

namespace Nordlet\Ecommerce\Types;

enum PostV1EcommerceOrdersFulfillResponseStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
