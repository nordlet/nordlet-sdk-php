<?php

namespace Nordlet\Catalog\Types;

enum ItemsGetCatalogResponseTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
