<?php

namespace Nordlet\Assets\Types;

enum AssetsInputVatAssetsResponseDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
