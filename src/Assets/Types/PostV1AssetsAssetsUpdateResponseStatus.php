<?php

namespace Nordlet\Assets\Types;

enum PostV1AssetsAssetsUpdateResponseStatus: string
{
    case Active = "active";
    case FullyDepreciated = "fully_depreciated";
    case Disposed = "disposed";
}
