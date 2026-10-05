<?php

namespace Nordlet\Assets\Types;

enum AssetsListAssetsResponseRowsItemInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
