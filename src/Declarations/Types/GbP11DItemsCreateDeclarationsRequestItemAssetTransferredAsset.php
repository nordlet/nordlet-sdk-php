<?php

namespace Nordlet\Declarations\Types;

enum GbP11DItemsCreateDeclarationsRequestItemAssetTransferredAsset: string
{
    case Cars = "cars";
    case Property = "property";
    case PreciousMetals = "precious metals";
    case Other = "other";
    case Multiple = "multiple";
}
