<?php

namespace Nordlet\Assets\Types;

enum AssetsDisposeAssetsResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
