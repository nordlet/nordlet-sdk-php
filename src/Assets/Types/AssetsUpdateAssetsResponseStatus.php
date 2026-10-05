<?php

namespace Nordlet\Assets\Types;

enum AssetsUpdateAssetsResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
