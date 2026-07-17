<?php

namespace Nordlet\Ecommerce\Types;

enum PostV1EcommerceProductsListResponseRowsItemType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
