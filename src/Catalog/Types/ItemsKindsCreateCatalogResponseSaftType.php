<?php

namespace Nordlet\Catalog\Types;

enum ItemsKindsCreateCatalogResponseSaftType: string
{
    case Goods = "goods";
    case Service = "service";
    case FixedAsset = "fixed_asset";
    case Other = "other";
}
