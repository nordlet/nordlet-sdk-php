<?php

namespace Nordlet\Bank\Types;

enum SettlementsMatchBankResponseMatchStatus: string
{
    case Unmatched = "unmatched";
    case Matched = "matched";
    case Manual = "manual";
}
