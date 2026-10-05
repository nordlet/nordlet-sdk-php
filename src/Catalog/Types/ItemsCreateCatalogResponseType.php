<?php

namespace Nordlet\Catalog\Types;

enum ItemsCreateCatalogResponseType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
