<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsListResponseRowsItemType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
