<?php

namespace Nordlet\Catalog\Types;

enum ItemsListCatalogResponseRowsItemTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
