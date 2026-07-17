<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsCreateResponseType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
