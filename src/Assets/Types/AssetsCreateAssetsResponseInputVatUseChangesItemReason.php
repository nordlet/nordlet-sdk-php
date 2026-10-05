<?php

namespace Nordlet\Assets\Types;

enum AssetsCreateAssetsResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
