<?php

namespace Nordlet\Catalog\Types;

enum ItemsUpdateCatalogResponseTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
