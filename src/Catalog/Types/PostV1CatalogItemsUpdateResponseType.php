<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsUpdateResponseType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
