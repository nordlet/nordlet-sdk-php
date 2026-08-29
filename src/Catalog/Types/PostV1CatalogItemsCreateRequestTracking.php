<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsCreateRequestTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
