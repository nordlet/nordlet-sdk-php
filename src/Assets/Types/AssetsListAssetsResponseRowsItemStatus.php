<?php

namespace Nordlet\Assets\Types;

enum AssetsListAssetsResponseRowsItemStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
