<?php

namespace Nordlet\Reference\Types;

enum VatResolveReferenceRequestGoodsKind: string
{
    case Installed = "installed";
    case EnergyNetwork = "energy_network";
}
