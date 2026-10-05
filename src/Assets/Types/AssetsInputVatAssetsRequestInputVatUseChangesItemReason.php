<?php

namespace Nordlet\Assets\Types;

enum AssetsInputVatAssetsRequestInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
