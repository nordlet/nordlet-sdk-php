<?php

namespace Nordlet\Assets\Types;

enum AssetsModernizeAssetsResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
