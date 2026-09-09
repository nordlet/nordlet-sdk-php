<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsKindsCreateRequestSaftType: string
{
    case Goods = "goods";
    case Service = "service";
    case FixedAsset = "fixed_asset";
    case Other = "other";
}
