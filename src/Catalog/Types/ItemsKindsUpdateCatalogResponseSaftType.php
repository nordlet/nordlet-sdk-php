<?php

namespace Nordlet\Catalog\Types;

enum ItemsKindsUpdateCatalogResponseSaftType: string
{
    case Goods = "goods";
    case Service = "service";
    case FixedAsset = "fixed_asset";
    case Other = "other";
}
