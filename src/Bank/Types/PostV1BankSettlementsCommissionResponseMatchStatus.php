<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsCommissionResponseMatchStatus: string
{
    case Unmatched = "unmatched";
    case Matched = "matched";
    case Manual = "manual";
}
