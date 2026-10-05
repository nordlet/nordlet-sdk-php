<?php

namespace Nordlet\Assets\Types;

enum AssetsDisposeAssetsResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
