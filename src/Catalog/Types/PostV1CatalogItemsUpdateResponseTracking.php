<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsUpdateResponseTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
