<?php

namespace Nordlet\Ecommerce\Types;

enum PostV1EcommerceOrdersListResponseRowsItemStatus: string
{
    case New_ = "new";
    case Reserved = "reserved";
    case Fulfilled = "fulfilled";
    case Cancelled = "cancelled";
}
