<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsUpdateRequestType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
