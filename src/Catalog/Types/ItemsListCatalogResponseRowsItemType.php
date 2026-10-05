<?php

namespace Nordlet\Catalog\Types;

enum ItemsListCatalogResponseRowsItemType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
