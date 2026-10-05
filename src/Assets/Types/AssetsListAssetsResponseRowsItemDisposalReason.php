<?php

namespace Nordlet\Assets\Types;

enum AssetsListAssetsResponseRowsItemDisposalReason: string
{
    case Sold = "sold";
    case Scrapped = "scrapped";
    case WrittenOff = "written_off";
}
