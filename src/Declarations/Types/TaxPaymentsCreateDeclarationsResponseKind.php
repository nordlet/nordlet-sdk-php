<?php

namespace Nordlet\Declarations\Types;

enum TaxPaymentsCreateDeclarationsResponseKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
