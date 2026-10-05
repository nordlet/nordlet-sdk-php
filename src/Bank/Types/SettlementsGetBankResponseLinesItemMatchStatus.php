<?php

namespace Nordlet\Bank\Types;

enum SettlementsGetBankResponseLinesItemMatchStatus: string
{
    case Unmatched = "unmatched";
    case Matched = "matched";
    case Manual = "manual";
}
