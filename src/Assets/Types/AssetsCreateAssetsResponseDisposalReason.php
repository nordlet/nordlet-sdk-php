<?php

namespace Nordlet\Assets\Types;

enum AssetsCreateAssetsResponseDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
