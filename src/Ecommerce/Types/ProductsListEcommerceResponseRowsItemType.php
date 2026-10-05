<?php

namespace Nordlet\Ecommerce\Types;

enum ProductsListEcommerceResponseRowsItemType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
