<?php

namespace Nordlet\Assets\Types;

enum AssetsCreateFromPurchaseAssetsResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
