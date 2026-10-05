<?php

namespace Nordlet\Ecommerce\Types;

enum OrdersFulfillEcommerceResponseStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
