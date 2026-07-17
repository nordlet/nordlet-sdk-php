<?php

namespace Nordlet\Assets\Types;

enum PostV1AssetsAssetsListResponseRowsItemStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
