<?php

namespace Nordlet\Declarations\Types;

enum TaxPaymentsCreateDeclarationsRequestKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
