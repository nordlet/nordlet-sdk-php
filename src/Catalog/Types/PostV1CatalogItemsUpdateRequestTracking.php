<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsUpdateRequestTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
