<?php

namespace Nordlet\Catalog\Types;

enum ItemsCreateCatalogResponseTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
