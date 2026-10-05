<?php

namespace Nordlet\Assets\Types;

enum AssetsCreateAssetsResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
