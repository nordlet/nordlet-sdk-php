<?php

namespace Nordlet\Assets\Types;

enum AssetsDisposeAssetsRequestReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
