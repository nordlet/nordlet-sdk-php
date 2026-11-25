<?php

namespace Nordlet\Assets\Types;

enum AssetsCreateFromPurchaseAssetsResponseDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
