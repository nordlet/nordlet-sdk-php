<?php

namespace Nordlet\Assets\Types;

enum PostV1AssetsAssetsInputVatResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
