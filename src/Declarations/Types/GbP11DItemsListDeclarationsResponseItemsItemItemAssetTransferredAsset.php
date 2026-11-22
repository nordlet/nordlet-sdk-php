<?php

namespace Nordlet\Declarations\Types;

enum GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferredAsset: string
{
    case Cars = "cars";
    case Property = "property";
    case PreciousMetals = "precious metals";
    case Other = "other";
    case Multiple = "multiple";
}
