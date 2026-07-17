<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsGetResponseType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
