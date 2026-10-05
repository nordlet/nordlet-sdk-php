<?php

namespace Nordlet\Catalog\Types;

enum ItemsUpdateCatalogResponseType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
