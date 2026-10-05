<?php

namespace Nordlet\Catalog\Types;

enum ItemsCreateCatalogRequestTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
