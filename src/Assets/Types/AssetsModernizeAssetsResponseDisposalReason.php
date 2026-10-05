<?php

namespace Nordlet\Assets\Types;

enum AssetsModernizeAssetsResponseDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
