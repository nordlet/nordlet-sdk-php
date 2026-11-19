<?php

namespace Nordlet\Declarations\Types;

enum GbCorporationTaxComputeDeclarationsResponsePartsItemRate: string
{
    case Main = "main";
    case SmallProfits = "small_profits";
    case MarginalRelief = "marginal_relief";
}
