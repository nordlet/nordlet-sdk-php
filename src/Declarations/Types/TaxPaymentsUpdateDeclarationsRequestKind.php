<?php

namespace Nordlet\Declarations\Types;

enum TaxPaymentsUpdateDeclarationsRequestKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
