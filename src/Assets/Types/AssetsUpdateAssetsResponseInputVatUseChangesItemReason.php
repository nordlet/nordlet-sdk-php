<?php

namespace Nordlet\Assets\Types;

enum AssetsUpdateAssetsResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
