<?php

namespace Nordlet\Assets\Types;

enum AssetsGetAssetsResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
