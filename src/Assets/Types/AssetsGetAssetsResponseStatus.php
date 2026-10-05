<?php

namespace Nordlet\Assets\Types;

enum AssetsGetAssetsResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
