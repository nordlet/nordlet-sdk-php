<?php

namespace Nordlet\Sales\Types;

enum InvoicesApplyAdvanceSalesResponseVatScheme: string
{
    case Domestic = "domestic";
    case IntraEuB2B = "intra_eu_b2b";
    case ReverseCharge = "reverse_charge";
    case OssUnion = "oss_union";
    case Ioss = "ioss";
    case MarketplaceDeemed = "marketplace_deemed";
    case Export = "export";
    case OutOfScope = "out_of_scope";
    case SmeExempt = "sme_exempt";
}
