<?php

namespace Nordlet\Assets\Types;

enum AssetsUpdateAssetsResponseDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
