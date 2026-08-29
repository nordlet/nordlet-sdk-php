<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsGetResponseTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
