<?php

namespace Nordlet\Assets\Types;

enum AssetsCreateFromPurchaseAssetsResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
