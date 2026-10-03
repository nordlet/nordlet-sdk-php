<?php

namespace Nordlet\Assets\Types;

enum PostV1AssetsAssetsListResponseRowsItemInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
