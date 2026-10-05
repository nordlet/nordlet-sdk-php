<?php

namespace Nordlet\Assets\Types;

enum AssetsInputVatAssetsResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
