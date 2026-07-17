<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsMatchResponseMatchStatus: string
{
    case Unmatched = "unmatched";
    case Matched = "matched";
    case Manual = "manual";
}
