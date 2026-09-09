<?php

namespace Nordlet\Catalog\Types;

enum PostV1CatalogItemsKindsUpdateResponseSaftType: string
{
    case Goods = "goods";
    case Service = "service";
    case FixedAsset = "fixed_asset";
    case Other = "other";
}
