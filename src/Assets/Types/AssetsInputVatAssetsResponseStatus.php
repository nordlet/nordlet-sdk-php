<?php

namespace Nordlet\Assets\Types;

enum AssetsInputVatAssetsResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
