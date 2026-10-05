<?php

namespace Nordlet\Assets\Types;

enum AssetsModernizeAssetsResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
