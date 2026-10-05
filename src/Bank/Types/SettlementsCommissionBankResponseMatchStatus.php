<?php

namespace Nordlet\Bank\Types;

enum SettlementsCommissionBankResponseMatchStatus: string
{
    case Unmatched = "unmatched";
    case Matched = "matched";
    case Manual = "manual";
}
