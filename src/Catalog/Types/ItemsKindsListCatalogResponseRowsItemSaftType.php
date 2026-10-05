<?php

namespace Nordlet\Catalog\Types;

enum ItemsKindsListCatalogResponseRowsItemSaftType: string
{
    case Goods = "goods";
    case Service = "service";
    case FixedAsset = "fixed_asset";
    case Other = "other";
}
