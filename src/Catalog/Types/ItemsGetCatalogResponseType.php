<?php

namespace Nordlet\Catalog\Types;

enum ItemsGetCatalogResponseType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
