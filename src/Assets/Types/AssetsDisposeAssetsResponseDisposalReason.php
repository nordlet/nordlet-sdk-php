<?php

namespace Nordlet\Assets\Types;

enum AssetsDisposeAssetsResponseDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
