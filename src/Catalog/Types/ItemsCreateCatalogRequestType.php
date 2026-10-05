<?php

namespace Nordlet\Catalog\Types;

enum ItemsCreateCatalogRequestType: string
{
    case Product = "product";
    case Service = "service";
    case Set = "set";
}
