<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsCreateRequestType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
