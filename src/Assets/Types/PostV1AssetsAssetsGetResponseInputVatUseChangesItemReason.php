<?php

namespace Nordlet\Assets\Types;

enum PostV1AssetsAssetsGetResponseInputVatUseChangesItemReason: string
{
    case UseChange = "use_change";
    case Sale = "sale";
    case Withdrawal = "withdrawal";
}
