<?php

namespace Nordlet\Assets\Types;

enum AssetsGetAssetsResponseDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
