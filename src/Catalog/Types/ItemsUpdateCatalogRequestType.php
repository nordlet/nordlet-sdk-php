<?php

namespace Nordlet\Catalog\Types;

enum ItemsUpdateCatalogRequestType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
