<?php

namespace Nordlet\Catalog\Types;

enum ItemsUpdateCatalogRequestTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
