<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsCreateResponseTracking: string
{
    case None = "none";
    case Lot = "lot";
    case Serial = "serial";
}
