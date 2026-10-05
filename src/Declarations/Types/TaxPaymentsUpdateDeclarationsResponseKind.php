<?php

namespace Nordlet\Declarations\Types;

enum TaxPaymentsUpdateDeclarationsResponseKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
